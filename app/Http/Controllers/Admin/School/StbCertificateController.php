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
            'certificateInformationExcel' => 'required|file|mimes:xlsx,xls',
            'certificateReferencePDF' => 'required|file|mimes:pdf',
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
