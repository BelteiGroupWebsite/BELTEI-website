<?php

namespace App\Livewire\School;

use App\Models\school\AcademicBatch;
use App\Models\school\Certificate;
use App\Models\School\Certificate\StbAcademicBatch;
use Livewire\Component;

class CertificateSearch extends Component
{
    public $search = "";
    public $program;
    public $batch;

    public function mount( $batch)
    {
        // $this->program = $program;
        $this->batch = $batch;
    }

    
    
    // public function render()
    // {
    //     $batchId = $this->batch;

    //     $academicBatch = StbAcademicBatch::where('id', $this->batch)->first();

    //     $profile = $academicBatch->grade->profile;
    //     $beltei = $academicBatch->grade->beltei;
    //     $moey = $academicBatch->grade->moey;
    //     $ielts = $academicBatch->grade->ielts;

    //     $gradeId = $academicBatch->grade->id;
        
    //     $programId = $academicBatch->grade->program->id;
    
    //     if (strlen($this->search) >= 1) {
    //         $studentInfos = $academicBatch->studentInfo()->where('certi_no', 'like', '%' . $this->search . '%')
    //                       ->orWhere('khmer_name', 'like', '%' . $this->search . '%')
    //                       ->orWhere('latin_name', 'like', '%' . $this->search . '%')->paginate(20);
    //     } else {
    //         $studentInfos = $academicBatch->studentInfo()->paginate(30);
    //     }
    
    //     return view('livewire.school.certificate-search', compact('studentInfos' , 'programId' , 'gradeId' , 'batchId'));
    // }


    public function render()
    {
        $batchId = $this->batch;

        $academicBatch = StbAcademicBatch::with(['grade', 'grade.program'])->find($batchId);

        $grade = $academicBatch->grade;
        


        $profile = $grade->profile;
        $beltei = $grade->beltei;
        $moey = $grade->moey;
        $ielts = $grade->ielts;

        $gradeId = $grade->id;
        $programId = $grade->program->id;

        $query = $academicBatch->studentInfo();

        if (strlen($this->search) >= 1) {
            $query->where(function ($q) {
                $q->where('certi_no', 'like', '%' . $this->search . '%')
                ->orWhere('khmer_name', 'like', '%' . $this->search . '%')
                ->orWhere('latin_name', 'like', '%' . $this->search . '%');
            });
        }

        $studentInfos = $query->paginate(strlen($this->search) >= 1 ? 20 : 30);

        return view('livewire.school.certificate-search', compact('studentInfos', 'programId', 'gradeId', 'batchId' , 'profile' , 'beltei' , 'moey' , 'ielts'));
    }

    
    
}
