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
        Schema::create('stb_grades', function (Blueprint $table) {
            $table->id();
            $table->string("grade");
            $table->integer("program_id");
            $table->timestamps();
        });
        $data = [
            ['grade' => '12' , 'program_id' => 1],
            ['grade' => '9' , 'program_id' => 1],
            ['grade' => '6' , 'program_id' => 1],
            ['grade' => '12' , 'program_id' => 2],
            ['grade' => '6' , 'program_id' => 2],
            ['grade' => 'Pre 6' , 'program_id' => 2],
            ['grade' => '11' , 'program_id' => 3],
            ['grade' => '6' , 'program_id' => 3],
        ];

        foreach ($data as $item) {
            DB::table('stb_grades')->insert($item); // Corrected table name
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stb_grades');
    }
};
