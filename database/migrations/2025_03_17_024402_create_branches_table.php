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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch')->nullable();
            $table->timestamps();
        });
        DB::table('branches')->insert([
            ['id' => 1, 'branch' => 'Beltei Construction'],
            ['id' => 2, 'branch' => 'Beltei School'],
            ['id' => 3, 'branch' => 'Beltei University'],
            ['id' => 4, 'branch' => 'Beltei International Relation'],
            ['id' => 5, 'branch' => 'Beltei Tour and Travel'],
            ['id' => 6, 'branch' => 'Beltei Test Center'],
            ['id' => 7, 'branch' => 'Beltei Test Charity'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
