<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utb_faculty', function (Blueprint $table) {
            $table->id();
            $table->string('FacultyEnglish');
            $table->string('FacultyKhmer');
            $table->timestamps();
        });
        $faculties = [
            [1, 'Business Administration', '', NULL, NULL],
            [2, 'Finance and Banking', '', NULL, NULL],
            [3, 'Economics', '', NULL, NULL],
            [4, 'Law', '', NULL, NULL],
            [5, 'Education, Arts, and Humanities', '', NULL, NULL],
            [6, 'Tourism and Hospitality', '', NULL, NULL],
            [7, 'Information Technology and Science', '', NULL, NULL],
            [8, 'Digital Technology and Communication', '', NULL, NULL],
            [9, 'Engineering', '', NULL, NULL],
            [10, 'Architecture', '', NULL, NULL],
            [11, 'International Relations', '', NULL, NULL],
            [12, 'Civil Aviation', '', NULL, NULL],
        ];

        foreach ($faculties as $faculty) {
            DB::table('utb_faculty')->insert([
                'id' => $faculty[0],
                'FacultyEnglish' => $faculty[1],
                'FacultyKhmer' => $faculty[2],
                'created_at' => $faculty[3],
                'updated_at' => $faculty[4],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_faculty');
    }
};
