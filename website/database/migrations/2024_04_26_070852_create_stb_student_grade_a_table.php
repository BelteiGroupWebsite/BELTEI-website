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
        Schema::create('stb_student_grade_a', function (Blueprint $table) {
            $table->id();
            $table->string('khmer_name')->nullable();
            $table->string('latin_name')->nullable();
            $table->tinyInteger('academic_year_id');
            $table->string('campus_id')->nullable();
            $table->string("identify_user")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stb_student_grade_a');
    }
};
