<?php

namespace App\Livewire\Admin\School;

use App\Exports\Admin\School\CertificateExport;
use App\Models\School\Certificate\StbAcademicBatch;
use App\Models\School\Certificate\StbStudentInfo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class CertificateComponent extends Component
{
    use WithPagination, WithFileUploads;

    public $batchID;

    public $academicBatch, $programId, $gradeId, $search;
    public $studentInfoShow, $studentIdRecord;
    public $student_id, $khmer_name, $latin_name, $gender, $dob, $nationality, $campus, $academic_batch_id;
    public $certi_no, $profile_no, $moey_no, $ielts_no;
    public $certi_no_upload, $ielts_no_upload, $profile_upload, $moey_no_upload;

    public function mount($batch)
    {
        $this->batchID = $batch;
        $this->academicBatch = StbAcademicBatch::with(['grade.program'])->find($batch);
        if ($this->academicBatch) {
            $this->gradeId = $this->academicBatch->grade->id;
            $this->programId = $this->academicBatch->grade->program->id;
        }
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

        return view('livewire.admin.school.certificate-component', compact('studentInfo'));
    }

    public function createOrUpdateStudent()
    {
        $this->validate($this->validationRules());

        $student = StbStudentInfo::find($this->studentIdRecord) ?? new StbStudentInfo();

        $student->fill($this->studentData());

        $student->certi_no = $this->handleFileUpload($this->certi_no_upload, 'beltei', $student?->certi_no ?? $student->student_id);
        $student->ielts_no = $this->handleFileUpload($this->ielts_no_upload, 'ielts', $student?->ielts_no ?? $student->student_id);
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
        $this->studentInfoShow = StbStudentInfo::findOrFail($studentId);

        $this->fill(values: $this->studentInfoShow->only([
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
        ]));
    }

    public function deleteStudent($studentId)
    {
        $student = StbStudentInfo::find($studentId);

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
            $path = "upload/certificate/school/{$this->programId}/{$this->gradeId}/{$this->academicBatch->id}/{$folder}/";
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
            'campus' => 'required',
            'academic_batch_id' => 'required',
            'profile_upload' => 'nullable|file|mimes:jpg,jpeg|max:1024',
            'certi_no_upload' => 'nullable|file|mimes:jpg,jpeg|max:1024',
            'moey_no_upload' => 'nullable|file|mimes:jpg,jpeg|max:1024',
            'ielts_no_upload' => 'nullable|file|mimes:jpg,jpeg|max:1024',
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
            'campus' => $this->campus,
            'academic_batch_id' => $this->academic_batch_id,
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
            'campus',
            'academic_batch_id',
            'certi_no',
            'profile_no',
            'moey_no',
            'ielts_no',
            'certi_no_upload',
            'profile_upload',
            'moey_no_upload',
            'ielts_no_upload',
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


    public $missingReport = [];

    public function showReport()
    {
        $this->missingReport = $this->getMissingDocumentReport();
        $this->dispatch('show-report');
    }


    public function getMissingDocumentReport()
    {
        $batchId = $this->academicBatch->id;

        $students = StbStudentInfo::where('academic_batch_id', $batchId)->get();

        $missing = [
            'no_profile' => 0,
            'no_beltei' => 0,
            'no_moey' => 0,
            'no_ielts' => 0,
            'list' => []
        ];

        foreach ($students as $student) {
            $noProfile = empty($student->profile_no);
            $noBeltei = empty($student->certi_no);
            $noMoey = empty($student->moey_no);
            $noIelts = empty($student->ielts_no);

            // Check storage files too
            $base = "upload/certificate/school/{$this->programId}/{$this->gradeId}/{$batchId}";

            $paths = [
                'profile' => "$base/profile/{$student->profile_no}.jpg",
                'beltei'  => "$base/beltei/{$student->certi_no}.jpg",
                'moey'    => "$base/moey/{$student->moey_no}.jpg",
                'ielts'   => "$base/ielts/{$student->ielts_no}.jpg",
            ];

            foreach ($paths as $key => $path) {
                if (!Storage::disk('private')->exists($path)) {
                    ${"no" . ucfirst($key)} = true;
                }
            }

            if ($noProfile || $noBeltei || $noMoey || $noIelts) {

                $missing['list'][] = [
                    'id' => $student->id,
                    'student_id' => $student->student_id,
                    'name' => $student->latin_name,
                    'missing' => [
                        'profile' => $noProfile,
                        'beltei' => $noBeltei,
                        'moey' => $noMoey,
                        'ielts' => $noIelts
                    ]
                ];

                $missing['no_profile'] += $noProfile;
                $missing['no_beltei'] += $noBeltei;
                $missing['no_moey'] += $noMoey;
                $missing['no_ielts'] += $noIelts;
            }
        }

        dd($missing);

        return $missing;
    }
}
