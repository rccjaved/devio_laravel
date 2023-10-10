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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('about_title');
            $table->string('about_subtitle');
            $table->text('description');
            $table->text('bold_description');
            $table->string('button_text');
            $table->string('button_url');
            $table->string('video_url');
            $table->string('about_image');
            $table->mediumText('image_heading');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
