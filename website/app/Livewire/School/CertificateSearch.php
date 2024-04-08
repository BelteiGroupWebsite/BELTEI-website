<?php

namespace App\Livewire\School;

use App\Models\school\Certificate;
use Livewire\Component;

class CertificateSearch extends Component
{
    public $search = "";
    public $program;
    public $grade;
    public $year;

    public function mount($program, $grade, $year)
    {
        $this->program = $program;
        $this->grade = $grade;
        $this->year = $year;
    }

    public function render()
    {
        $certificates = [];

        if (strlen($this->search) >= 1) {
            $certificates = Certificate::where('program' , $this->program)
                ->where('certi_no', 'like', '%' . $this->search . '%')
                ->orWhere('name_kh', 'like', '%' . $this->search . '%')
                ->orWhere('name_eng', 'like', '%' . $this->search . '%')
                ->paginate(50);
        } else {
            $certificates = Certificate::where('program',$this->program)->where('grade' , $this->grade)->where('batch_startYear' , $this->year)->paginate(50);
            // how can i paginate a campus students per one page
        }

        return view('livewire.school.certificate-search', compact('certificates'));
    }
}
