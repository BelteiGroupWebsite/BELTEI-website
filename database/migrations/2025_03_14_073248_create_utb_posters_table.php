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
        Schema::create('utb_posters', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->integer('row')->nullable();
            $table->integer('column')->nullable();
            $table->integer('column_type')->nullable();
            $table->integer('order_column')->nullable();
            $table->integer('branch')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_posters');
    }
};
