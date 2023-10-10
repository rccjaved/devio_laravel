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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('home_title');
            $table->string('home_subtitle');
            $table->string('button_text');
            $table->string('button_url');
            $table->string('total_projects');
            $table->string('total_countries');
            $table->string('total_workers');
            $table->string('total_window_users');
            $table->string('video_url');
            $table->string('facebook_url');
            $table->string('whatsapp_no');
            $table->string('instagram_url');
            $table->string('linkedin_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
