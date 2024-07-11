<?php

namespace App\Imports\University;

use App\Models\University\Certificate\UtbStudentInfo;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\Log;

class StudentInfoImport implements ToCollection, WithHeadingRow
{
    // /**
    // * @param Collection $collection
    // */
    // public function collection(Collection $collection)
    // {
    //     //
    // }

    protected $degree_academicbatch_id;

    public function __construct($degree_academicbatch_id)
    {
        $this->degree_academicbatch_id = $degree_academicbatch_id;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            try {
                // Check if dob is numeric (likely an Excel date serial number)
                if (is_numeric($row['dob'])) {
                    $dob = Date::excelToDateTimeObject($row['dob']);
                    $formatted_dob = Carbon::instance($dob)->toDateString();
                } else {
                    // Assume dob is already in a readable format
                    $formatted_dob = trim($row['dob']);
                }

                UtbStudentInfo::create([
                    'student_id' => preg_replace('/\s+/', '', $row['student_id']),
                    'khmer_name' => $row['khmer_name'],
                    'latin_name' => $row['latin_name'],
                    'gender' => trim(substr($row['gender'], 0, 1)),
                    'nationality' => $row['nationality'],
                    'dob' => $formatted_dob,
                    'major_id' => $row['major_id'],
                    'profile_no' => preg_replace('/\s+/', '', $row['profile_no']),
                    'certi_no' => preg_replace('/\s+/', '', $row['certi_no']),
                    'moey_no' => preg_replace('/\s+/', '', $row['moey_no']),
                    'degree_academicbatch_id' => $this->degree_academicbatch_id,
                ]);
                
            } catch (\Exception $e) {
                Log::error('Error importing data in row ' . ($key + 1) . ': ' . $e->getMessage());
                return back()->with('error', 'There was a problem importing the data: ' . $e->getMessage());
                // Optionally, you can throw an exception or handle it as needed
            }
        }
    }
}
