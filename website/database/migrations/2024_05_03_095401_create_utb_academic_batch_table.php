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
        Schema::create('utb_academic_batch', function (Blueprint $table) {
            $table->id();
            $table->string('start_academic_year');
            $table->string('batch');
            $table->tinyInteger('degree_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_academic_batch');
    }
};
