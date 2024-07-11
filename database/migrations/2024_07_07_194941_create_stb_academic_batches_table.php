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
        Schema::create('stb_academic_batches', function (Blueprint $table) {
            $table->id();
            $table->string("start_academic_year")->nullable(); // 2010 // 2016
            $table->string("batch")->nullable();
            $table->integer("grade_id"); // 1 // 1
            $table->text('reference');
            $table->timestamps();
        });
    }

    // batch of the grade (a grade could has lots of batch/academic year) ex: grade 12 from 2000 - 2024 / IMA from batch 1 to 20
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stb_academic_batches');
    }
};
