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

    
    
    public function render()
    {
        $batchId = $this->batch;

        
        $academicBatch = StbAcademicBatch::where('id', $this->batch)->first();

        $gradeId = $academicBatch->grade->id;
        
        $programId = $academicBatch->grade->program->id;
    
        if (strlen($this->search) >= 1) {
            $studentInfos = $academicBatch->studentInfo()->where('certi_no', 'like', '%' . $this->search . '%')
                          ->orWhere('khmer_name', 'like', '%' . $this->search . '%')
                          ->orWhere('latin_name', 'like', '%' . $this->search . '%')->paginate(20);
        } else {
            $studentInfos = $academicBatch->studentInfo()->paginate(30);
        }
    
        return view('livewire.school.certificate-search', compact('studentInfos' , 'programId' , 'gradeId' , 'batchId'));
    }
}
