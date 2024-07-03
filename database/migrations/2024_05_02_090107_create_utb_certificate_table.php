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
        Schema::create('utb_certificate', function (Blueprint $table) {
            $table->id();
            $table->string("certi_no")->nullable();
            $table->string("name_kh")->nullable();
            $table->string("name_eng")->nullable();
            $table->string("gender")->nullable();
            $table->string("student_id")->nullable();
            $table->string("dob")->nullable();
            $table->integer("academic_year_id");
            $table->string("major_id")->nullable();
            // $table->integer("degree_id")->default(3);
            $table->string("identify_user")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_certificate');
    }
};
