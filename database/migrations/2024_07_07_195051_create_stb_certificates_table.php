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
        Schema::create('stb_certificates', function (Blueprint $table) {
            $table->id();
            $table->integer("student_info_id");
            $table->integer("certificate_type_id");
            $table->string("certificate_path");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stb_certificates');
    }
};
