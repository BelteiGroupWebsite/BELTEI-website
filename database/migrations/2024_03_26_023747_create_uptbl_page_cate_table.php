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
        Schema::create('uptbl_page_cate', function (Blueprint $table) {
            $table->id();
            $table->text('category');
            $table->timestamps();
        });

        $data = [
            ['id' => 1, 'category' => 'Contruction'], // Corrected data format
            ['id' => 2, 'category' => 'School'],
            ['id' => 3, 'category' => 'University'],
            ['id' => 4, 'category' => 'Relation'],
            ['id' => 5, 'category' => 'Tours and Travel'],
            ['id' => 6, 'category' => 'Test Center'],
            ['id' => 7, 'category' => 'Charity'],
        ];

        foreach ($data as $item) {
            DB::table('uptbl_page_cate')->insert($item); // Corrected table name
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uptbl_page_cate');
    }
};
