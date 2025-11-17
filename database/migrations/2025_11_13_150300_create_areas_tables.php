<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('area_intros', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('intro');
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
        });

        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->boolean('is_public')->default(true);
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
        });

        Schema::table('area_intros', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->restrictOnDelete();
            $table->foreign('updated_by')->references('id')->on('users')->restrictOnDelete();
        });

        Schema::table('areas', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->restrictOnDelete();
            $table->foreign('updated_by')->references('id')->on('users')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('areas', function (Blueprint $table) {
            if (Schema::hasColumn('areas', 'created_by')) {
                $table->dropForeign(['created_by']);
            }
            if (Schema::hasColumn('areas', 'updated_by')) {
                $table->dropForeign(['updated_by']);
            }
        });
        Schema::table('area_intros', function (Blueprint $table) {
            if (Schema::hasColumn('area_intros', 'created_by')) {
                $table->dropForeign(['created_by']);
            }
            if (Schema::hasColumn('area_intros', 'updated_by')) {
                $table->dropForeign(['updated_by']);
            }
        });
        Schema::dropIfExists('areas');
        Schema::dropIfExists('area_intros');
    }
};
