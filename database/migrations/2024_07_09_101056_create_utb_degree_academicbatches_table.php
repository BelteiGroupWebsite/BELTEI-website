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
        Schema::create('utb_degree_academicbatches', function (Blueprint $table) {
            $table->id();
            $table->integer('degree_id');
            $table->integer('batch');
            $table->integer('academic_year')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_degree_academicbatches');
    }
};
