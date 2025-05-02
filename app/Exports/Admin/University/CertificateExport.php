<?php

namespace App\Exports\Admin\University;

use App\Models\University\Certificate\UtbStudentInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CertificateExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $academicBatchId;

    public function __construct($academicBatchId)
    {
        $this->academicBatchId = $academicBatchId;
    }

    public function collection()
    {
        return UtbStudentInfo::select(
            'student_id',
            'khmer_name',
            'latin_name',
            'gender',
            'dob',
            'nationality',
            'degree_academicbatch_id',
            'major_id',
            'certi_no',
            'profile_no',
            'moey_no',
        )
            ->where('degree_academicbatch_id', $this->academicBatchId)->get();
    }

    public function headings(): array
    {
        return [
            'student_id',
            'khmer_name',
            'latin_name',
            'gender',
            'dob',
            'nationality',
            'degree_academicbatch_id',
            'major_id',
            'certi_no',
            'profile_no',
            'moey_no',
        ];
    }

}
