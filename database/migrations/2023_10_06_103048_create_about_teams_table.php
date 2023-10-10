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
        Schema::create('about_teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_name')->nullable();
            $table->string('team_image')->nullable();
            $table->string('designation')->nullable();
            $table->text('team_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_teams');
    }
};
