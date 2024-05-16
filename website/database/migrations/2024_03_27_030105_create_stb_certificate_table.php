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
        Schema::create('stb_certificate', function (Blueprint $table) {
            $table->id();
            $table->string("certi_no")->nullable();
            $table->string("name_kh")->nullable();
            $table->string("name_eng")->nullable();
            $table->string("nation")->nullable();
            $table->string("gender")->nullable();
            $table->string("dob")->nullable();
            $table->tinyInteger("campus_id")->nullable();
            $table->string("moey_id")->nullable();
            $table->tinyInteger("academic_batch_id")->nullable();
            $table->string("identify_user")->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stb_certificate');
    }
};
