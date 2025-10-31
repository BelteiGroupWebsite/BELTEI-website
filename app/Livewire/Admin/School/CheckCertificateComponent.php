<?php

namespace App\Livewire\Admin\School;

use Livewire\Component;
use App\Models\School\Certificate\StbAcademicBatch;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class CheckCertificateComponent extends Component
{
    public $batchId, $batch;

    public $programId, $gradeId;

    public function mount($batch)
    {
        $this->batchId = $batch;
        $this->batch = StbAcademicBatch::with('studentInfo')->findOrFail($batch);

        $this->gradeId = $this->batch->grade->id;
        $this->programId = $this->batch->grade->program->id;
    }

    public function getMissingProperty()
    {
        $students = $this->batch->studentInfo;

        $missing = $students->map(function ($s) {
            $basePath = "upload/certificate/school/{$this->programId}/{$this->gradeId}/{$s->academic_batch_id}";

            // Helper to safely check existence
            $safeExists = function ($path) {
                try {
                    return Storage::disk('private')->exists($path);
                } catch (\League\Flysystem\CorruptedPathDetected $e) {
                    Log::warning('Corrupted path detected', [
                        'path' => $path,
                        'message' => $e->getMessage(),
                    ]);
                    return false;
                } catch (\Throwable $e) {
                    Log::error('Error checking file existence', [
                        'path' => $path,
                        'error' => $e->getMessage(),
                    ]);
                    return false;
                }
            };

            // Sanitize potential corrupted values (remove hidden chars)
            $clean = fn($v) => preg_replace('/[^\x20-\x7E]/', '', (string)$v);

            $profileNo = $clean($s->profile_no);
            $certiNo   = $clean($s->certi_no);
            $moeyNo    = $clean($s->moey_no);

            $profileExists = $profileNo
                && $safeExists("$basePath/profile/{$profileNo}.jpg");

            $belteiExists = $certiNo
                && $safeExists("$basePath/beltei/{$certiNo}.jpg");

            $moeyExists = $moeyNo
                && $safeExists("$basePath/moey/{$moeyNo}.jpg");

            return [
                'student' => $s,
                'missing_profile' => !$profileExists,
                'missing_beltei'  => !$belteiExists,
                'missing_moey'    => !$moeyExists,
            ];
        })->filter(fn($x) => $x['missing_profile'] || $x['missing_beltei'] || $x['missing_moey']);

        // dd($missing);
        return [
            'total'         => $students->count(),
            'count_profile' => $missing->where('missing_profile', true)->count(),
            'count_beltei'  => $missing->where('missing_beltei', true)->count(),
            'count_moey'    => $missing->where('missing_moey', true)->count(),
            'rows'          => $missing,
        ];
    }



    public function render()
    {
        return view('livewire.admin.school.check-certificate-component');
    }
}
