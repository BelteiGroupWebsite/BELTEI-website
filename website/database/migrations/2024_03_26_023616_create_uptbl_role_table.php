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
        Schema::create('uptbl_role', function (Blueprint $table) {
            $table->id();
            $table->text('role');
            $table->timestamps();
        });

        $data = [
            ['id' => 1, 'role' => 'Super Owner'], // Corrected data format
            ['id' => 2, 'role' => 'Owner'],
            ['id' => 3, 'role' => 'Admin'],
            ['id' => 4, 'role' => 'Stuff'],
            ['id' => 5, 'role' => 'Contributer'],
            ['id' => 6, 'role' => 'viewer'], // Corrected data format
        ];

        foreach ($data as $item) {
            DB::table('uptbl_role')->insert($item); // Corrected table name
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uptbl_role');
    }
};
