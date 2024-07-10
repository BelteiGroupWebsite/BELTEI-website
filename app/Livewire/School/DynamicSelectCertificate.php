<?php

namespace App\Livewire\School;

use Livewire\Component;
use App\Models\School\Certificate\Program;
use App\Models\School\Certificate\Grade;
use App\Models\School\Certificate\StbGrade;
use App\Models\School\Certificate\StbProgram;
use App\Models\school\GradeA;

class DynamicSelectCertificate extends Component
{

    public $programs;
    public $grades;
    public $selectedGrade;
    
    public $selectedprograms = null;
    
    public function mount()
    {

        $this->programs = StbProgram::all();

    }


    public function render()
    {
        // $programs = Program::get();
        return view('livewire.school.dynamic-select-certificate');
    }

    public function updatedSelectedprograms(){
        // dd($this->selectedprograms);
        $this->grades = StbGrade::where('program_id' , $this->selectedprograms)->get();
    }
}

