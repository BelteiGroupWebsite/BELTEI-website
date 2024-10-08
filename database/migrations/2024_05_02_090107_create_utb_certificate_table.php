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
            $table->string("student_id")->nullable();
            $table->string("khmer_name")->nullable();
            $table->string("latin_name")->nullable();
            $table->string("gender")->nullable();
            $table->string("dob")->nullable();
            // $table->integer("academic_year_id");
            $table->integer("academic_year_id");
            $table->string("major_id")->nullable();
            $table->string("certi_no")->nullable();
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
