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
        Schema::create('utb_major', function (Blueprint $table) {
            $table->id();
            $table->integer('FacultyID');
            $table->string('MajorEnglish');
            $table->string('MajorKhmer');
            $table->timestamps();
        });

        $majors = [
            [1, 1, 'General Management', 'គ្រប់គ្រងទូទៅ', NULL, NULL],
            [2, 1, 'International Business', 'ពាណិជ្ជកម្មអន្ដរជាតិ', NULL, NULL],
            [3, 1, 'Entrepreneurship and Innovation', 'សហគ្រិន និងនវានុវត្តន៌', NULL, NULL],
            [4, 1, 'Accounting', 'គណនេយ្យ', NULL, NULL],
            [5, 1, 'Marketing', 'ទីផ្សារ', NULL, NULL],
            [6, 2, 'Finance and Banking', 'ហិរញ្ញវត្ថុ និងធនាគារ', NULL, NULL],
            [7, 2, 'International Banking', 'ធនាគារអន្ដរជាតិ', NULL, NULL],
            [8, 2, 'Financial Technology', 'បច្ចេកវិទ្យាហិរញ្ញវត្ថុ', NULL, NULL],
            [9, 3, 'Economic', 'សេដ្ឋកិច្ច', NULL, NULL],
            [10, 3, 'Development Economic', 'អភិវឌ្ឍន៌សេដ្ឋកិច្ច', NULL, NULL],
            [11, 3, 'International Economic', 'សេដ្ឋកិច្ចអន្ដរជាតិ', NULL, NULL],
            [12, 3, 'Digital Economy', 'សេដ្ឋកិច្ចឌីជីថល', NULL, NULL],
            [13, 4, 'Law', 'ច្បាប់', NULL, NULL],
            [14, 4, 'Private Law', 'ច្បាប់ឯកជន', NULL, NULL],
            [15, 4, 'International Law', 'ច្បាប់អន្ដរជាតិ', NULL, NULL],
            [16, 4, 'Public Administration', 'រដ្ឋាបាលសាធារណៈ', NULL, NULL],
            [17, 5, 'Education Administrantion and Leadership', 'រដ្ឋបាលអប់រំ និងភាពជាអ្នកដឹកនាំ', NULL, NULL],
            [18, 5, 'Teaching English as a Foreign Language', 'បង្រៀនភាសាអង់គ្លេស', NULL, NULL],
            [19, 5, 'Communication Education', 'សាគមនាគមន៌អប់រំ', NULL, NULL],
            [20, 5, 'Khmer Literature', 'អក្សរសាស្រ្ដខ្មែរ', NULL, NULL],
            [21, 5, 'Mathematics', 'គណិតវិទ្យា', NULL, NULL],
            [22, 5, 'Physics', 'រូបវិទ្យា', NULL, NULL],
            [23, 5, 'Chemistry', 'គីមីវិទ្យា', NULL, NULL],
            [24, 6, 'Tourism Management', 'គ្រប់គ្រងទេសចរណ៌', NULL, NULL],
            [25, 6, 'Hotel Management', 'គ្រប់គ្រងសណ្ឋាគារ', NULL, NULL],
            [26, 6, 'Hospitality Management', 'គ្រប់គ្រងបដិសណ្ឋាកិច្ច', NULL, NULL],
            [27, 7, 'Software Engineering', 'វិស្វកម្មសហ្វវែ', NULL, NULL],
            [28, 7, 'Computer Networking and Cyber Security', 'បណ្ដាញកុំព្យូទ័រ និងសុវត្តិភាពបច្ចេកវិទ្យាព័ត៏មានវិទ្យា', NULL, NULL],
            [29, 7, 'Computer Graphic Design', 'រចនាពហុប្រព័ន្ធផ្សផ្សាយ', NULL, NULL],
            [30, 8, 'Digital Technology', 'បច្ចេកវិទ្យាឌិជីថល', NULL, NULL],
            [31, 8, 'Digital Communication and Media', 'ទំនាក់ទំនងឌីជីថល និងប្រព័ន្ធផ្សផ្សាយ', NULL, NULL],
            [32, 8, 'Eletronic and Telecommunication Engineering', 'វិស្វកម្មអេឡិត្រូនិច​ និងទូរគមនាគមន៌', NULL, NULL],
            [33, 9, 'Civil Engineering', 'វិស្វកម្មសំណង់ស៊ីវិល', NULL, NULL],
            [34, 9, 'Construction Engineering and Management', 'គ្រប់គ្រងវិស្វកម្មសំណង់', NULL, NULL],
            [35, 10, 'Architecture and Urbanization', 'ស្ថាបត្យកម្ម និងនគរូបនីយកម្ម', NULL, NULL],
            [36, 10, 'Interior Design', 'ស្ថាបត្យកម្មអគារ', NULL, NULL],
            [37, 11, 'International Relation', 'ទំនាក់ទំនងអន្ដរជាតិ', NULL, NULL],
            [38, 11, 'Diplomacy', 'ការទូត', NULL, NULL],
            [39, 11, 'International Affairs and Negotiations', 'កិច្ចការអន្ដរជាតិ និងការចរចា', NULL, NULL],
            [40, 12, 'Airline and Airport Management', 'គ្រប់គ្រងក្រុមហ៊ុនអាកាសចរន៌', NULL, NULL],
            [41, 12, 'Aviation Management', 'គ្រប់គ្រងវិស័យអាកាសចរណ៌', NULL, NULL],
            [42, 12, 'Aircraft Maintenance Engineering', 'វិស្វកម្មថែទាំយន្ដហោះ', NULL, NULL]
        ];

        foreach ($majors as $major) {
            DB::table('utb_major')->insert([
                'FacultyID' => $major[1],
                'MajorEnglish' => $major[2],
                'MajorKhmer' => $major[3],
                'created_at' => $major[4],
                'updated_at' => $major[5],
            ]);
        }
        
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utb_major');
    }
};
