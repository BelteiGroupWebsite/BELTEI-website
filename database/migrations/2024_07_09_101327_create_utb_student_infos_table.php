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
        Schema::create('utb_student_infos', function (Blueprint $table) {
            $table->id();
            $table->string("student_id")->nullable();
            $table->string("khmer_name")->nullable();
            $table->string("latin_name")->nullable();
            $table->string("gender")->nullable();
            $table->string("dob")->nullable();
            $table->string("nationality")->nullable();
            $table->integer("degree_academicbatch_id");
            $table->integer("major_id")->nullable();
            $table->string("profile_no")->nullable();
            $table->string("certi_no")->nullable();
            $table->string("moey_no")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_student_infos');
    }
};
