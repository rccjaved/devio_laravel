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
        Schema::create('service_pages', function (Blueprint $table) {
            $table->id();
            $table->string('service_title')->nullable();
            $table->string('service_subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('service_name')->nullable();
            $table->string('service_url')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
            $table->string('service_page_image_one')->nullable();
            $table->string('service_page_image_two')->nullable();
            $table->mediumText('service_page_heading_one')->nullable();
            $table->mediumText('service_page_heading_two')->nullable();
            $table->text('service_page_para_one')->nullable();
            $table->text('service_page_para_two')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_pages');
    }
};
