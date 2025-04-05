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
        Schema::create('utb_collaborators', function (Blueprint $table) {
            $table->id();
            // $table->string('collaborator');
            $table->text('logo')->nullable();
            $table->text('link')->nullable();
            $table->text('photos')->nullable();
            $table->integer('order_column')->nullable();
            $table->integer('utb_country_id');
            $table->integer('branch_id');
            
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_collaborators');
    }
};
