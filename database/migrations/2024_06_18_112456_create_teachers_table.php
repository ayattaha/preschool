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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacherName', 100);
            $table->string('phone', 25);
            $table->string('email', 100);
            $table->string('teacherSpeciality', 100);
            $table->boolean('active');
            $table->string('image', 100);
            $table->string('facebook', 100);
            $table->string('tweeter', 100);
            $table->string('instgrame', 100);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
