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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_title')->nullable();
            $table->string('portfolio_subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
            $table->string('image1')->nullable();
            $table->string('image1_url')->nullable();
            $table->string('image2')->nullable();
            $table->string('image2_url')->nullable();
            $table->string('image3')->nullable();
            $table->string('image3_url')->nullable();
            $table->string('image4')->nullable();
            $table->string('image4_url')->nullable();
            $table->string('image5')->nullable();
            $table->string('image5_url')->nullable();
            $table->string('image6')->nullable();
            $table->string('image6_url')->nullable();
            $table->string('image7')->nullable();
            $table->string('image7_url')->nullable();
            $table->string('image8')->nullable();
            $table->string('image8_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
