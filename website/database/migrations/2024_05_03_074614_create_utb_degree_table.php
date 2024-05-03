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
        Schema::create('utb_degree', function (Blueprint $table) {
            $table->id();

            $table->string('degree_eng');
            $table->string('degree_kh');
            
            $table->timestamps();
        });


        $degrees = [
            ['Doctor', 'បណ្ឌិត'],
            ['Master', 'បរិញ្ញាបត្រជាន់ខ្ពស់'],
            ['Bachelor', 'បរិញ្ញាបត្រ'],
            ['Associate', 'បរិញ្ញាបត្ររង'],
        ];

        foreach ($degrees as $degree) {
            DB::table('utb_degree')->insert([
                'degree_eng' => $degree[0],
                'degree_kh' => $degree[1],
            ]);
        }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_degree');
    }
};
