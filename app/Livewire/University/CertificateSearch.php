<?php

namespace App\Livewire\University;

use App\Models\University\Certificate\UtbDegreeAcademicbatch;
use App\Models\University\Certificate\UtbStudentInfo;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\WithPagination;

class CertificateSearch extends Component
{
    use WithPagination;

    public $search = "";
    public $degree;
    public $batch;
    public $studentID, $displayFolder, $displayField;
    public $robot;
    public $batchCert;
    public $studentInfoShow;
    public $encryptedProfile;

    public function mount($degree, $batch)
    {
        $this->degree = $degree;
        $this->batch = $batch;
        $this->loadBatchCert();
    }

    private function loadBatchCert()
    {
        $this->batchCert = UtbDegreeAcademicbatch::where('id', $this->batch)->first();
    }

    public function render()
    {
        $certificates = $this->getCertificates();

        return view('livewire.university.certificate-search', [
            'certificates' => $certificates,
            'degreeId' => $this->degree,
            'batchId' => $this->batch
        ]);
    }

    private function getCertificates()
    {
        if (strlen($this->search) >= 1) {
            return $this->batchCert->studentInfo()
                ->where('certi_no', 'like', '%' . $this->search . '%')
                ->orWhere('khmer_name', 'like', '%' . $this->search . '%')
                ->orWhere('latin_name', 'like', '%' . $this->search . '%')
                ->paginate(10);
        }

        return $this->batchCert->studentInfo()->paginate(20);
    }

    public function openCertificateModal($id, $display, $field)
    {
        $this->studentID = $id;
        $this->displayFolder = $display;
        $this->displayField = $field;
    }

    public function verify()
    {
        $this->validate([
            'robot' => 'required',
        ]);

        $this->reset('robot');

        $encryptedPath = Crypt::encryptString(
            'university/' . $this->degree . '/' . $this->batch . '/' . $this->displayFolder . '/' . $this->displayField . '.jpg'
        );

        // Dispatch browser event with URL
        $url = route('certificate.view', ['filename' => $encryptedPath]);

        $this->dispatchBrowserEvent('open-new-tab', ['url' => $url]);

        // return redirect()->route('certificate.view', ['filename' => $encryptedPath]);
    }

    public function submit()
    {
        $this->verify();
    }

    public function openPortalModal($id)
    {
        $this->studentID = $id;
        $this->studentInfoShow = UtbStudentInfo::find($this->studentID);
        // dd($this->studentInfoShow);
        $this->encryptedProfile = Crypt::encryptString(
            'university/' . $this->degree . '/' . $this->batch . '/profile/' . $this->studentInfoShow->profile_no . '.jpg'
        );
    }
}
