<?php

namespace App\Exports\Admin\School;

use App\Models\School\Certificate\StbStudentInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CertificateExport implements FromCollection, WithHeadings
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
        return StbStudentInfo::select(
            'student_id',
            'khmer_name',
            'latin_name',
            'gender',
            'dob',
            'nationality',
            'campus',
            'academic_batch_id',
            'certi_no',
            'profile_no',
            'moey_no',
            'ielts_no'
        )
            ->where('academic_batch_id', $this->academicBatchId)->get();
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
            'campus',
            'academic_batch_id',
            'certi_no',
            'profile_no',
            'moey_no',
            'ielts_no'
        ];
    }
}
