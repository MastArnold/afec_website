<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->string('year')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('project_categories')->nullOnDelete();
            $table->string('cover_path')->nullable();
            $table->string('cover_name')->nullable();
            $table->string('cover_type')->nullable();
            $table->date('date')->nullable();
            $table->enum('status', ['PENDING', 'INPROGRESS', 'COMPLETED', 'CANCELLED', 'CONTINUE'])->default('PENDING');
            $table->boolean('is_public')->default(false);
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });

        Schema::create('project_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->cascadeOnDelete();
            $table->foreignId('image_id')->constrained('images')->cascadeOnDelete();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });

        // Ajouter 'project' à l'enum entity de la table notifications
        DB::statement("ALTER TABLE notifications MODIFY COLUMN entity ENUM('blog','image','video','message','project') NOT NULL");
    }

    public function down(): void
    {
        Schema::dropIfExists('project_images');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('project_categories');

        DB::statement("ALTER TABLE notifications MODIFY COLUMN entity ENUM('blog','image','video','message') NOT NULL");
    }
};
