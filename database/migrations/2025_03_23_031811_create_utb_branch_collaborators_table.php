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
        Schema::create('utb_branch_collaborators', function (Blueprint $table) {
            $table->id();
            $table->integer('utb_branch_id');
            $table->integer('utb_collaborator_id');
            $table->integer('utb_country_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_branch_collaborators');
    }
};
