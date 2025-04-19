<?php

namespace App\Livewire\School;

use App\Models\school\AcademicBatch;
use App\Models\school\Certificate;
use App\Models\School\Certificate\StbAcademicBatch;
use App\Models\School\Certificate\StbStudentInfo;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\WithPagination;

class CertificateSearch extends Component
{
    use WithPagination;

    public $search = "";
    public $program;
    public $gradeId;
    public $programId;
    public $batch;
    public $studentID, $studentInfoShow;
    public $robot;

    public $displayFolder , $displayField;

    public $academicBatch;
    public function mount($batch)
    {
        $this->batch = $batch;

        $this->academicBatch = StbAcademicBatch::with(['grade.program'])->find($batch);
        if ($this->academicBatch) {
            $this->gradeId = $this->academicBatch->grade->id;
            $this->programId = $this->academicBatch->grade->program->id;
        }
    }

    public function render()
    {
        // $query = StbAcademicBatch::find($this->batch)?->studentInfo();
        $query = $this->academicBatch?->studentInfo();

        if ($query && strlen($this->search) >= 1) {
            $query->where(function ($q) {
                $q->where('certi_no', 'like', '%' . $this->search . '%')
                    ->orWhere('khmer_name', 'like', '%' . $this->search . '%')
                    ->orWhere('latin_name', 'like', '%' . $this->search . '%');
            });
        }

        $studentInfos = $query ? $query->paginate(strlen($this->search) >= 1 ? 10 : 20) : collect();

        // $this->academicBatch = StbAcademicBatch::find($this->batch);

        return view('livewire.school.certificate-search', [
            'studentInfos' => $studentInfos,
            'programId' => $this->programId,
            'gradeId' => $this->gradeId,
            'batchId' => $this->batch,
            'profile' => $this->academicBatch?->grade->profile,
            'beltei' => $this->academicBatch?->grade->beltei,
            'moey' => $this->academicBatch?->grade->moey,
            'ielts' => $this->academicBatch?->grade->ielts,
        ]);
    }

    public function showProfile($id)
    {
        // Implement showProfile logic if needed
    }

    public function openPortalModal($id)
    {
        $this->studentID = $id;
        $this->studentInfoShow = StbStudentInfo::find($this->studentID);
    }
    public function openCertificateModal($id, $display, $field)
    {
        $this->studentID = $id;
        $this->displayFolder = $display;
        $this->displayField = $field;
        // $this->studentInfoShow = StbStudentInfo::find($this->studentID);
        // dd($this->programId . '/' . $this->gradeId . '/' . $this->batch . '/' . $this->displayFolder . '/' . $this->displayField . '.jpg');
    }

    public function verify()
    {
        $this->validate([
            'robot' => 'required',
        ]);

        $this->reset('robot');

        // $originalInfo = StbStudentInfo::find($this->studentID);
        // dd($this->programId . '/' . $this->gradeId . '/' . $this->batch . '/' . $this->displayFolder . '/' . $this->displayField . '.jpg');
        $encryptedPath = Crypt::encryptString(
            'school/'.$this->programId . '/' . $this->gradeId . '/' . $this->batch . '/' . $this->displayFolder . '/' . $this->displayField . '.jpg'
            // $this->programId . '/' . $this->gradeId . '/' . $this->batch . '/beltei/' . $originalInfo->certi_no . '.jpg'
        );

        return redirect()->route('certificate.view', ['filename' => $encryptedPath]);
    }
    public function submit(){
        $this->verify();
    }
    private function convertDateToYmd($dateString)
    {
        $timestamp = strtotime($dateString);
        return $timestamp ? date('Y-m-d', $timestamp) : null;
    }
}
