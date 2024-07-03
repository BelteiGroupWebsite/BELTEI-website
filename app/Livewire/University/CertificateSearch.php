<?php

namespace App\Livewire\University;

use App\Models\University\AcademicBatch;
use App\Models\University\Certificate;
use Livewire\Component;

class CertificateSearch extends Component
{

    public $search = "";
    public $degree;
    public $batch;

    public function mount($degree, $batch)
    {
        $this->degree = $degree;
        $this->batch = $batch;
    }

    
    
    public function render()
    {
        $academicBatches = AcademicBatch::where('degree_id', $this->degree)->where('batch', $this->batch)->first();
        $academicBatchesId = $academicBatches ? $academicBatches->id : 0;
    
        if (strlen($this->search) >= 1) {
            $certificates = Certificate::where('academic_year_id', $academicBatchesId)
                ->where(function ($query) {
                    $query->where('certi_no', 'like', '%' . $this->search . '%')
                          ->orWhere('name_kh', 'like', '%' . $this->search . '%')
                          ->orWhere('name_eng', 'like', '%' . $this->search . '%');
                })
                ->paginate(10);
        } else {
            $certificates = Certificate::where('academic_year_id', $academicBatchesId)->paginate(50);
        }
    
        return view('livewire.university.certificate-search', compact('certificates'));
    }
    
}
