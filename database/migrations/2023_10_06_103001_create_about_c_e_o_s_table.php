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
        Schema::create('about_c_e_o_s', function (Blueprint $table) {
            $table->id();
            $table->string('ceo_title')->nullable();
            $table->string('ceo_subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('ceo_image')->nullable();
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('linkedin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_c_e_o_s');
    }
};
