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
        Schema::create('uptbl_user_role_cate', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->timestamps();
        });

        $data = [
            ['id' => 1, 'user_id' => '1' , 'category_id' => '1'], // Corrected data format
            ['id' => 2, 'user_id' => '1' , 'category_id' => '2'],
            ['id' => 3, 'user_id' => '1' , 'category_id' => '3'],
            ['id' => 4, 'user_id' => '1' , 'category_id' => '4'],
            ['id' => 5, 'user_id' => '1' , 'category_id' => '5'],
            ['id' => 6, 'user_id' => '1' , 'category_id' => '6'],
            ['id' => 7, 'user_id' => '1' , 'category_id' => '7'],
        ];

        foreach ($data as $item) {
            DB::table('uptbl_user_role_cate')->insert($item); // Corrected table name
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uptbl_user_role_cate');
    }
};
