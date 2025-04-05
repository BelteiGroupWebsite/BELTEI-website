<?php

namespace App\Livewire\School;

use App\Models\school\AcademicBatch;
use App\Models\school\Certificate;
use App\Models\School\Certificate\StbAcademicBatch;
use App\Models\School\Certificate\StbStudentInfo;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\WithPagination;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT;

class CertificateSearch extends Component
{
    use WithPagination;
    public $search = "";
    public $program;

    public $gradeId;
    public $programId;
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

        // $academicBatch = StbAcademicBatch::with(['grade', 'grade.program'])->find($batchId);
        $academicBatch = StbAcademicBatch::find($batchId);

        $grade = $academicBatch->grade;



        $profile = $grade->profile;
        $beltei = $grade->beltei;
        $moey = $grade->moey;
        $ielts = $grade->ielts;

        $gradeId = $grade->id;
        $programId = $grade->program->id;
        $this->gradeId = $gradeId;
        $this->programId = $programId;

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


    public $studentID;
    public $dob;
    public function openCertificateModal($id){
        $this->studentID = $id;
    }
    public function verify()
    {
        $this->validate([
            // 'khmerName' => 'required',
            // 'latinName' => 'required',
            'dob' => 'required',
        ]);

        // $khmerName = $this->khmerName;
        // $latinName = $this->latinName;
        $dob = $this->dob;

        $originalInfo = StbStudentInfo::find($this->studentID);


        // if ($originalInfo->khmer_name == $khmerName && $originalInfo->latin_name == $latinName && $this->convertDateToYmd($originalInfo->dob) == $dob) {
        //     $this->showModal = !$this->showModal;
        //     $encryptedPath = Crypt::encryptString($this->programId . '/' . $this->gradeId . '/' . $this->batch . '/beltei/' . $originalInfo->certi_no . '.jpg');
        //     return redirect()->route('certificate.view', ['filename' => $encryptedPath]);
        // } 
        $encryptedPath = Crypt::encryptString($this->programId . '/' . $this->gradeId . '/' . $this->batch . '/beltei/' . $originalInfo->certi_no . '.jpg');
        return redirect()->route('certificate.view', ['filename' => $encryptedPath]);


        if ($this->convertDateToYmd($originalInfo->dob) == $dob) {
            // $this->showModal = !$this->showModal;
            $encryptedPath = Crypt::encryptString($this->programId . '/' . $this->gradeId . '/' . $this->batch . '/beltei/' . $originalInfo->certi_no . '.jpg');
            
            return redirect()->route('certificate.view', ['filename' => $encryptedPath]);
        } 
        else {
            session()->flash('error', 'Information does not match!');
        }
    }

    private function convertDateToYmd($dateString)
    {
        $timestamp = strtotime($dateString);
        return $timestamp ? date('Y-m-d', $timestamp) : null;
    }
}
