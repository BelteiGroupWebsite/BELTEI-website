<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Imports\University\StudentInfoImport;
use App\Models\University\Certificate\UtbDegreeAcademicbatch;
use App\Models\University\Certificate\UtbStudentInfo;
use App\Models\University\Degree;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class UtbCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $degrees = Degree::get();
        return view('web.admin.university.new-certificate.index', compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $degrees = Degree::get();
        return view('web.admin.university.new-certificate.create', compact('degrees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'degree' => 'nullable|integer|min:1',
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
        
        $inputs = $request->all();
        
        $batch = $inputs['batch'] ?? null;
        $startAcademicYear = $inputs['startAcademicYear'] ?? null;
        
        $academicBatch = UtbDegreeAcademicbatch::create([
            'degree_id' => $inputs['degree'],
            'batch' => $batch,
            'academic_year' => $startAcademicYear,
        ]);

        try {
            Excel::import(new StudentInfoImport($academicBatch->id), $request->file('certificateInformationExcel'));

            if ($request->hasFile('certificateReferencePDF')) {
                $currentReferencePath = 'storage/' . $academicBatch->reference;
                if (file_exists($currentReferencePath) && is_file($currentReferencePath)) {
                    unlink($currentReferencePath);
                }
    
                // Store the new reference PDF file
                $referencePath = $request->file('certificateReferencePDF')->store('upload/certificate/university/' . $validated['degree'] . '/' . $academicBatch->id . '/reference', 'private');
                // $referencePath = $request->file('certificateReferencePDF')->store('upload/certificate/university/' . $validated['degree'] . '/' . $academicBatch->id . '/reference', 'public');
    
                // Update the academic batch with the new reference path
                $academicBatch->reference = $referencePath;
                $academicBatch->save();
            }
            
            return back()->with('success', 'Excel data imported successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'There was a problem importing the data: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $academicBatch = UtbDegreeAcademicbatch::findOrFail($id);

        $academicBatchId = $id;
        $degreeId = $academicBatch->degree->id;
        
        $studentInfo = $academicBatch->studentInfo()->paginate(25);
        return view('web.admin.university.new-certificate.show', compact('studentInfo', 'degreeId', 'academicBatchId'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $academicBatch = UtbDegreeAcademicbatch::findOrFail($id);
        $degrees = Degree::get();
        return view('web.admin.university.new-certificate.edit', compact('academicBatch', 'degrees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'degree' => 'nullable|integer|min:1',
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
    
        // Extract relevant inputs
        $batch = $validated['batch'] ?? null;
        $startAcademicYear = $validated['startAcademicYear'] ?? null;
    
        // Find the existing academic batch
        $academicBatch = UtbDegreeAcademicbatch::findOrFail($id);
    
        try {
            // Update the existing record with validated data
            $academicBatch->update([
                'degree_id' => $validated['degree'],
                'batch' => $batch,
                'academic_year' => $startAcademicYear,
            ]);
    
            // Handle the certificate reference PDF file if provided
            if ($request->hasFile('certificateReferencePDF')) {
                $currentReferencePath = 'storage/' . $academicBatch->reference;
                if (file_exists($currentReferencePath) && is_file($currentReferencePath)) {
                    unlink($currentReferencePath);
                }
    
                // Store the new reference PDF file
                $referencePath = $request->file('certificateReferencePDF')->store('upload/certificate/university/' . $validated['degree'] . '/' . $academicBatch->id . '/reference', 'private');
                // $referencePath = $request->file('certificateReferencePDF')->store('upload/certificate/university/' . $validated['degree'] . '/' . $academicBatch->id . '/reference', 'public');
    
                // Update the academic batch with the new reference path
                $academicBatch->reference = $referencePath;
                $academicBatch->save();
            }
    
            // Handle the certificate information Excel file if provided
            if ($request->hasFile('certificateInformationExcel')) {
                // Delete existing student info and their associated files
                if ($academicBatch->studentInfo()->exists()) {
                    // foreach ($academicBatch->studentInfo as $studentInfo) {
                    //     $profilePath = 'storage/upload/certificate/university/' . $academicBatch->degree_id . '/' . $academicBatch->id . '/profile/' . $studentInfo->profile_no . '.jpg';
                    //     $belteiPath = 'storage/upload/certificate/university/' . $academicBatch->degree_id . '/' . $academicBatch->id . '/beltei/' . $studentInfo->certi_no . '.jpg';
                    //     $moeyPath = 'storage/upload/certificate/university/' . $academicBatch->degree_id . '/' . $academicBatch->id . '/moey/' . $studentInfo->moey_id . '.jpg';
    
                    //     if (file_exists($profilePath) && is_file($profilePath)) {
                    //         unlink($profilePath);
                    //     }
    
                    //     if (file_exists($belteiPath) && is_file($belteiPath)) {
                    //         unlink($belteiPath);
                    //     }
    
                    //     if (file_exists($moeyPath) && is_file($moeyPath)) {
                    //         unlink($moeyPath);
                    //     }
                    // }
    
                    $academicBatch->studentInfo()->delete();
                }
    
                // Import the new student info from the Excel file
                Excel::import(new StudentInfoImport($academicBatch->id), $request->file('certificateInformationExcel'));
            }
    
            return back()->with('success', 'Academic batch updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'There was a problem updating the data: ' . $e->getMessage());
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $academicBatch = UtbDegreeAcademicbatch::findOrFail($id);
        $academicBatch->delete();

        return redirect()->route('university.index')->with('success', 'Academic batch deleted successfully.');
    }
}
