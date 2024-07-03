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
        Schema::create('stb_campus', function (Blueprint $table) {
            $table->id();
            $table->string('campus_kh');
            $table->string('campus_eng');
            $table->timestamps();
        });


        $data = [


            ['campus_kh' => 'គីរីរម្យ' ,  'campus_eng' => 'Kirirom'],
            ['campus_kh' => 'ផ្សារទួលទំពូង' ,  'campus_eng' => 'Toul Tum Pong'],
            ['campus_kh' => 'ដេអិន' ,  'campus_eng' => 'DN'],
            ['campus_kh' => 'ផ្សារដើមថ្កូវ' ,  'campus_eng' => 'Phsar Doeum Thkov'],
            ['campus_kh' => 'ច្បារអំពៅ' ,  'campus_eng' => 'Chbar Ampeou'],
            ['campus_kh' => 'អូរឫស្សី' ,  'campus_eng' => 'Orssei'],
            ['campus_kh' => 'ពេទ្យលោកសង្ឃ' ,  'campus_eng' => 'Loksang Hospital'],
            ['campus_kh' => 'ផ្សារពោធិ៍ចិនតុង' ,  'campus_eng' => 'Pochen Tong'],
            ['campus_kh' => 'ស្ទឹងមានជ័យ' ,  'campus_eng' => 'Steung Meanchey'],
            ['campus_kh' => 'អាងទឹកអូឡាំពិក' ,  'campus_eng' => 'Ang Teuk Olympic'],
            ['campus_kh' => 'ផ្សារតូច' ,  'campus_eng' => 'Phsar Touch'],
            ['campus_kh' => 'ផ្សារដីហុយ' ,  'campus_eng' => 'Phsar Deihoy'],
            ['campus_kh' => 'រង្វង់មូលកាំកូស៊ីធី' ,  'campus_eng' => 'Comko City'],
            ['campus_kh' => 'ក្រុងតាខ្មៅ' ,  'campus_eng' => 'Takhmao Town'],
            ['campus_kh' => 'ផ្សារជម្ពូវ័ន' ,  'campus_eng' => 'Phsar Chumpu Vorn'],
            ['campus_kh' => 'ផ្លូវកោងវែងស្រេង' ,  'campus_eng' => 'Phlov Yeng Sreng'],
            ['campus_kh' => 'ឫស្សីកែវ' ,  'campus_eng' => 'Russey Keo'],
            ['campus_kh' => 'ផ្សារព្រែកឯក' ,  'campus_eng' => 'Phsar Preak Leap'],
            ['campus_kh' => 'ផ្សារព្រែកលៀប' ,  'campus_eng' => 'Phsar Preak Eak'],
            ['campus_kh' => 'ចោមចៅ' ,  'campus_eng' => 'Chom Chao'],
            ['campus_kh' => 'ផ្សារឈូកមាស' ,  'campus_eng' => 'Phsar Chhouk Meas'],
            ['campus_kh' => 'រង្វង់មូលគួរស្រូវ' ,  'campus_eng' => 'Kour Srov'],
            ['campus_kh' => 'ផ្លូវព្រៃសស្តុបឫស្សីសាញ់' ,  'campus_eng' => 'Preysor Russey Sanh'],
            ['campus_kh' => 'រង្វង់មូលព្រែកតាមាក់' ,  'campus_eng' => 'Prek Ta Mek'],
            ['campus_kh' => 'ស្ថានីបូមទឹកផ្លូវ' ,  'campus_eng' => 'Pumping Station 371'],
            ['campus_kh' => 'ព្រែកប្រា' ,  'campus_eng' => 'Preak Pra'],
            
            
        ];

        foreach ($data as $item) {
            DB::table('stb_campus')->insert($item); // Corrected table name
        }
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stb_campus');
    }
};

