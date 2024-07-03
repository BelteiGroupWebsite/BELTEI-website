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
        Schema::create('stb_program', function (Blueprint $table) {
            $table->id();
            $table->string('program_eng');
            $table->string('program_kh');
            $table->timestamps();
        });


        $programs = [
            ['General Education', 'ចំណេះទូទៅ'],
            ['ESL Program', 'ភាសាអង់គ្លេសទូទៅ'],
            ['IMA Program', 'អភិវឌ្ឍបញ្ញា IMA'],
        ];

        foreach ($programs as $program) {
            DB::table('stb_program')->insert([
                'program_eng' => $program[0],
                'program_kh' => $program[1],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stb_program');
    }
};
