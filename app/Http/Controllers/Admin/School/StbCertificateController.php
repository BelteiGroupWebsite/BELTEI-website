<?php

namespace App\Http\Controllers\Admin\School;

use App\Http\Controllers\Controller;
use App\Imports\School\StudentInfoImport;
use App\Models\School\Certificate\StbAcademicBatch;
use App\Models\School\Certificate\StbStudentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Imports\StudentsImport;
use App\Models\School\Certificate\StbProgram;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use function Livewire\store;

class StbCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $programs = StbProgram::get();
        return view('web.admin.school.new-certificate.index' , compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('web.admin.school.new-certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('Entering store method');
    
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'programs' => 'required|integer|min:1',
            'grade' => 'required|integer|min:1',
            'batch' => 'nullable|integer|min:1',
            'startAcademicYear' => 'nullable|integer|digits:4|min:1900|max:' . (date('Y') + 1),
            'certificateInformationExcel' => 'required|file|mimes:xlsx,xls|max:51200', // Adjusted max file size (in KB)
            'certificateReferencePDF' => 'required|file|mimes:pdf|max:51200', // Adjusted max file size (in KB)
        ]);
    
        Log::info('Validation rules defined');
    
        // Custom validation logic to ensure either batch or startAcademicYear is provided
        $validator->after(function ($validator) use ($request) {
            if (empty($request->input('batch')) && empty($request->input('startAcademicYear'))) {
                $validator->errors()->add('batch', 'Either batch or start academic year must have a value.');
                $validator->errors()->add('startAcademicYear', 'Either batch or start academic year must have a value.');
            }
        });
    
        Log::info('Custom validation logic defined');
    
        // Handle validation failures
        if ($validator->fails()) {
            Log::error('Validation failed', ['errors' => $validator->errors()->all()]);
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        Log::info('Validation passed');
    
        // Retrieve validated data
        $validated = $validator->validated();
        Log::info('Validated data retrieved', ['validated' => $validated]);
    
        // Create a new StbAcademicBatch record using Eloquent
        try {
            $academicBatch = new StbAcademicBatch();
            $academicBatch->batch = $validated['batch'] ?? null;
            $academicBatch->start_academic_year = $validated['startAcademicYear'] ?? null;
            $academicBatch->grade_id = $validated['grade'];
            $academicBatch->reference = ''; // Set a temporary reference value
            $academicBatch->save();
            Log::info('New StbAcademicBatch record created', ['academicBatch' => $academicBatch]);
    
            // Store the certificate reference PDF file
            $referencePath = $request->file('certificateReferencePDF')->store('upload/certificate/school/'.$validated['programs'].'/'.$validated['grade'].'/'.$academicBatch->id.'/reference', 'public');
            Log::info('Certificate reference PDF stored', ['referencePath' => $referencePath]);
    
            // Update the academic batch with the reference path
            $academicBatch->reference = $referencePath;
            $academicBatch->save();
            Log::info('Academic batch updated with reference path', ['academicBatch' => $academicBatch]);
        } catch (\Exception $e) {
            Log::error('Error creating StbAcademicBatch record', ['message' => $e->getMessage()]);
            return back()->with('error', 'There was a problem creating the academic batch: ' . $e->getMessage());
        }
    
        try {
            // Perform the import, explicitly specifying the reader type
            Excel::import(new StudentInfoImport($academicBatch->id), $request->file('certificateInformationExcel'));
            Log::info('Excel data imported successfully');
            return back()->with('success', 'Excel data imported successfully.');
        } catch (\Exception $e) {
            Log::error('Error importing Excel data', ['message' => $e->getMessage()]);
            return back()->with('error', 'There was a problem importing the data: ' . $e->getMessage());
        }
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $academicBatch = StbAcademicBatch::where('id', $id)->first();
        $studentInfo = $academicBatch->studentInfo()->paginate(25); // Change 10 to the number of records per page you want
    
        return view('web.admin.school.new-certificate.show', compact('academicBatch', 'studentInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $academicBatch = StbAcademicBatch::findOrFail($id);
    
        return view('web.admin.school.new-certificate.edit', compact('academicBatch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'programs' => 'required|integer|min:1',
            'grade' => 'required|integer|min:1',
            'batch' => 'nullable|integer|min:1',
            'startAcademicYear' => 'nullable|integer|digits:4|min:1900|max:' . (date('Y') + 1),
            'certificateInformationExcel' => 'nullable|file|mimes:xlsx,xls|max:51200', // Adjusted max file size (in KB)
            'certificateReferencePDF' => 'nullable|file|mimes:pdf|max:51200', // Adjusted max file size (in KB)
        ]);
    
        // Custom validation logic to ensure either batch or startAcademicYear is provided
        $validator->after(function ($validator) use ($request) {
            if (empty($request->input('batch')) && empty($request->input('startAcademicYear'))) {
                $validator->errors()->add('batch', 'Either batch or start academic year must have a value.');
                $validator->errors()->add('startAcademicYear', 'Either batch or start academic year must have a value.');
            }
        });
    
        // Handle validation failures
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Retrieve validated data
        $validated = $validator->validated();
    
        try {
            // Find the existing StbAcademicBatch record by ID
            $academicBatch = StbAcademicBatch::findOrFail($id);
    
            // Update the existing record with validated data
            $academicBatch->batch = $validated['batch'] ?? $academicBatch->batch;
            $academicBatch->start_academic_year = $validated['startAcademicYear'] ?? $academicBatch->start_academic_year;
            $academicBatch->grade_id = $validated['grade'];
            $academicBatch->save();
    
            // Store the certificate reference PDF file if provided
            if ($request->hasFile('certificateReferencePDF')) {
                if (file_exists('storage/'.$academicBatch->reference)) {
                    unlink('storage/'.$academicBatch->reference);
                }
            
                // Store the new reference PDF file
                $referencePath = $request->file('certificateReferencePDF')->store('upload/certificate/school/' . $validated['programs'] . '/' . $validated['grade'] . '/' . $academicBatch->id . '/reference', 'public');
            
                // Update the academic batch with the new reference path
                $academicBatch->reference = $referencePath;
                $academicBatch->save();
            }
            
    
            // Import updated Excel data if provided
            if ($request->hasFile('certificateInformationExcel')) {

                if ($academicBatch->studentInfo()->exists()) {
                    foreach($academicBatch->studentInfo as $studentInfo) {
                        $programId = $academicBatch->grade->program->id;
                        $gradeId = $academicBatch->grade->id;
                        $batchId = $academicBatch->id;
        
                        $profilePath = 'storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$batchId.'/profile/'.$studentInfo->profile_no.'.jpg';
                        $belteiPath = 'storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$batchId.'/beltei/'.$studentInfo->certi_no.'.jpg';
                        $moeyPath = 'storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$batchId.'/moey/'.$studentInfo->moey_id.'.jpg';
                        $idPath = 'storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$batchId.'/il/'.$studentInfo->il_id.'.jpg';
        
                        if (file_exists($profilePath) && is_file($profilePath)) {
                            unlink($profilePath);
                        }
        
                        if (file_exists($belteiPath) && is_file($belteiPath)) {
                            unlink($belteiPath);
                        }
        
                        if (file_exists($moeyPath) && is_file($moeyPath)) {
                            unlink($moeyPath);
                        }
                        if (file_exists($idPath) && is_file($idPath)) {
                            unlink($idPath);
                        }
                    }
                    
                    $academicBatch->studentInfo()->delete();
                    Log::info('Related student_info records and files deleted', ['academicBatch_id' => $id]);
                } 
                
                Excel::import(new StudentInfoImport($academicBatch->id), $request->file('certificateInformationExcel'));
            }
    
            return back()->with('success', 'Academic batch updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'There was a problem updating the academic batch: ' . $e->getMessage());
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Log::info('Entering destroy method', ['id' => $id]);
    
        try {
            $academicBatch = StbAcademicBatch::findOrFail($id);
            Log::info('StbAcademicBatch found', ['academicBatch' => $academicBatch]);
    
            // Check if related student_info exists before deleting
            if ($academicBatch->studentInfo()->exists()) {
                foreach($academicBatch->studentInfo as $studentInfo) {
                    $programId = $academicBatch->grade->program->id;
                    $gradeId = $academicBatch->grade->id;
                    $batchId = $academicBatch->id;
    
                    $profilePath = 'storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$batchId.'/profile/'.$studentInfo->profile_no.'.jpg';
                    $belteiPath = 'storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$batchId.'/beltei/'.$studentInfo->certi_no.'.jpg';
                    $moeyPath = 'storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$batchId.'/moey/'.$studentInfo->moey_id.'.jpg';
                    $idPath = 'storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$batchId.'/il/'.$studentInfo->il_id.'.jpg';
                    
                    if (file_exists($profilePath)) {
                        unlink($profilePath);
                    }
    
                    if (file_exists($belteiPath)) {
                        unlink($belteiPath);
                    }
    
                    if (file_exists($moeyPath)) {
                        unlink($moeyPath);
                    }
                    if (file_exists($idPath) && is_file($idPath)) {
                        unlink($idPath);
                    }
                }
                
                $academicBatch->studentInfo()->delete();
                Log::info('Related student_info records and files deleted', ['academicBatch_id' => $id]);
            } else {
                Log::warning('No related student_info found for StbAcademicBatch', ['academicBatch_id' => $id]);
            }
    
            if (file_exists('storage/'.$academicBatch->reference)) {
                unlink('storage/'.$academicBatch->reference);
            }
            
            $academicBatch->delete();
            Log::info('StbAcademicBatch record deleted', ['academicBatch' => $academicBatch]);
    
            return back()->with('success', 'Academic batch deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting StbAcademicBatch record', [
                'id' => $id,
                'message' => $e->getMessage(),
                'exception' => $e
            ]);
    
            return back()->with('error', 'There was a problem deleting the academic batch: ' . $e->getMessage());
        }
    }
    
    
    
    
}
