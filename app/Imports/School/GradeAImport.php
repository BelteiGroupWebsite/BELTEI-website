<?php

namespace App\Imports\School;

use App\Models\school\GradeA;
use App\Models\School\StudentGradeA;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;

class GradeAImport implements ToCollection , WithHeadingRow
{
    protected $academic_batch_id;

    public function __construct($academic_batch_id)
    {
        $this->academic_batch_id = $academic_batch_id;
    }

    public function collection(Collection $rows)
    {
        $userId = Auth::user()->id;
        
        foreach ($rows as $key => $row) {
            try {
                StudentGradeA::create([
                    // 'student_id' => preg_replace('/\s+/', '', $row['student_id']),
                    'khmer_name' => $row['khmer_name'],
                    'latin_name' => $row['latin_name'],
                    'academic_year_id' => $this->academic_batch_id,
                    'campus_id' => is_numeric($row['campus']) ? (int)$row['campus'] : $row['campus'],
                    'identify_user' => $userId,
                ]);
                
            } catch (\Exception $e) {
                return back()->with('error', 'There was a problem importing the data: ' . $e->getMessage());
                // Optionally, you can throw an exception or handle it as needed
            }
        }
    }
}
