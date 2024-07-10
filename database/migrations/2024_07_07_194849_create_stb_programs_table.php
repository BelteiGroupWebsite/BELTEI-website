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
        Schema::create('stb_programs', function (Blueprint $table) {
            $table->id();
            $table->string('program_name');
            $table->timestamps();
        });
        $data = [
            ['program_name' => 'General Education'], // academic year
            ['program_name' => 'ESL Program'], // batch
            ['program_name' => 'IMA Program'], // batch
        ];

        foreach ($data as $item) {
            DB::table('stb_programs')->insert($item); // Corrected table name
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stb_programs');
    }
};
