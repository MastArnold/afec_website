<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_message_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::table('contact_messages', function (Blueprint $table) {
            $table->dropColumn('subject');
            $table->foreignId('subject_id')
                ->nullable()
                ->after('sender_mail')
                ->constrained('contact_message_subjects')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('contact_messages', function (Blueprint $table) {
            $table->dropForeign(['subject_id']);
            $table->dropColumn('subject_id');
            $table->string('subject')->after('sender_mail');
        });

        Schema::dropIfExists('contact_message_subjects');
    }
};
