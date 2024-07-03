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
        Schema::create('language', function (Blueprint $table) {
            $table->id();
            $table->string('lang');
            $table->string('key');
            $table->string('flag')->nullable();
            $table->timestamps();
        });

        $languages = [
            ['ខ្មែរ' , 'kh'],
            ['English' , 'en'],
            // ['中文' , 'ch'],
        ];

        foreach ($languages as $language) {
            DB::table('language')->insert([
                'lang' => $language[0],
                'key' => $language[1],
            ]);
        }
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('language');
    }
};
