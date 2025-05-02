<?php

namespace App\Livewire\Admin\University;

use App\Exports\Admin\University\CertificateExport;
use App\Models\University\Certificate\UtbDegreeAcademicbatch;
use App\Models\University\Certificate\UtbStudentInfo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class CertificateComponent extends Component
{
    use WithPagination, WithFileUploads;

    public $batchID;
    
    public $academicBatch, $degree, $gradeId, $search;
    public $studentInfoShow, $studentIdRecord;
    public $student_id, $khmer_name, $latin_name, $gender, $dob, $nationality, $degree_academicbatch_id;
    public $certi_no, $profile_no, $moey_no;
    public $certi_no_upload, $profile_upload, $moey_no_upload;

    public function mount($batch)
    {
        $this->batchID = $batch;
        $this->academicBatch = UtbDegreeAcademicbatch::find($batch);
        // $this->academicBatch = UtbDegreeAcademicbatch::with(['degree.program'])->find($batch);
        // if ($this->academicBatch) {
        //     $this->gradeId = $this->academicBatch->grade->id;
        //     $this->degree = $this->academicBatch->grade->program->id;
        // }
    }

    public function render()
    {
        $query = $this->academicBatch?->studentInfo();

        if ($query && strlen($this->search) >= 1) {
            $query->where(function ($q) {
                $q->where('certi_no', 'like', "%{$this->search}%")
                    ->orWhere('khmer_name', 'like', "%{$this->search}%")
                    ->orWhere('latin_name', 'like', "%{$this->search}%");
            });
        }

        $studentInfo = $query ? $query->paginate(strlen($this->search) >= 1 ? 10 : 15) : collect();

        return view('livewire.admin.university.certificate-component', compact('studentInfo'));
    }

    public function createOrUpdateStudent()
    {
        $this->validate($this->validationRules());

        $student = UtbStudentInfo::find($this->studentIdRecord) ?? new UtbStudentInfo();

        $student->fill($this->studentData());

        $student->certi_no = $this->handleFileUpload($this->certi_no_upload, 'beltei', $student?->certi_no ?? $student->student_id);
        $student->profile_no = $this->handleFileUpload($this->profile_upload, 'profile', $student?->profile_no ?? $student->student_id);
        $student->moey_no = $this->handleFileUpload($this->moey_no_upload, 'moey', $student?->moey_no ?? $student->student_id);

        $student->save();

        session()->flash('message', 'Student information updated successfully!');
        $this->resetForm();

    }

    public function createStudent()
    {
        $this->resetForm();
        $this->studentIdRecord = null;
    }
    public function editStudent($studentId)
    {
        $this->resetForm();
        $this->studentIdRecord = $studentId;
        $this->studentInfoShow = UtbStudentInfo::findOrFail($studentId);

        $this->fill(values: $this->studentInfoShow->only([
            'student_id',
            'khmer_name',
            'latin_name',
            'gender',
            'dob',
            'nationality',
            'degree_academicbatch_id',
            'certi_no',
            'profile_no',
            'moey_no',
        ]));
    }

    public function deleteStudent($studentId)
    {
        $student = UtbStudentInfo::find($studentId);

        if ($student) {
            $student->delete();
            session()->flash('message', 'Student deleted successfully!');
        } else {
            session()->flash('error', 'Student not found!');
        }

        $this->reset(['studentIdRecord', 'studentInfoShow']);
    }

    private function handleFileUpload($file, $folder, $existingFile)
    {
        if ($file) {
            $path = "upload/certificate/university/{$this->academicBatch->degree_id}/{$this->batchID}/{$folder}/";
            // $path = "upload/certificate/university/{$this->degree}/{$this->gradeId}/{$this->academicBatch->id}/{$folder}/";
            return $this->storeFile($file, $path, $existingFile);
        }
        return $existingFile;
    }

    private function storeFile($file, $folder, $filename)
    {
        $file->storeAs($folder, $filename . '.jpg', 'private');
        return $filename;
    }

    private function validationRules()
    {
        return [
            'khmer_name' => 'required',
            'latin_name' => 'required',
            'gender' => 'required',
            'dob' => 'required|date',
            'nationality' => 'required',
            'degree_academicbatch_id' => 'required',
            'profile_upload' => 'nullable|file|mimes:jpg,jpeg|max:1024',
            'certi_no_upload' => 'nullable|file|mimes:jpg,jpeg|max:1024',
            'moey_no_upload' => 'nullable|file|mimes:jpg,jpeg|max:1024',
        ];
    }

    private function studentData()
    {
        return [
            'student_id' => $this->student_id,
            'khmer_name' => $this->khmer_name,
            'latin_name' => $this->latin_name,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'nationality' => $this->nationality,
            'degree_academicbatch_id' => $this->degree_academicbatch_id,
        ];
    }

    private function resetForm()
    {
        $this->reset([
            'student_id',
            'khmer_name',
            'latin_name',
            'gender',
            'dob',
            'nationality',
            'degree_academicbatch_id',
            'certi_no',
            'profile_no',
            'moey_no',
            'certi_no_upload',
            'profile_upload',
            'moey_no_upload',
            'studentInfoShow',
            'studentIdRecord',
        ]);
    }

    public function downloadFile()
    {
        return Excel::download(new CertificateExport($this->academicBatch->id), 'certificateInfo_' . $this->academicBatch->batch . '_' . $this->academicBatch?->start_academic_year . '.xlsx');
    }

    public function viewDocument($filename)
    {
        $path = "private/upload/certificate/{$filename}";

        if (!Storage::exists($path)) {
            abort(404);
        }

        return response()->file(storage_path("app/{$path}"));
    }
}
