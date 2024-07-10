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
        Schema::create('stb_student_infos', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('khmer_name')->nullable();
            $table->string('latin_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('academic_batch_id');
            $table->string("profile_no")->nullable();
            $table->string("certi_no")->nullable();
            $table->string("moey_no")->nullable();
            $table->timestamps();
        });
    }
    

    // a student could has 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stb_student_infos');
    }
};
