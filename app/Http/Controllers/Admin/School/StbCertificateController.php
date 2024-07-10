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
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'programs' => 'required|integer|min:1',
            'grade' => 'required|integer|min:1',
            'batch' => 'nullable|integer|min:1',
            'startAcademicYear' => 'nullable|integer|digits:4|min:1900|max:' . (date('Y') + 1),
            'certificateInformationExcel' => 'required|file|mimes:xlsx,xls',
            'certificateReferencePDF' => 'required|file|mimes:pdf',
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
    
        // Create a new StbAcademicBatch record
        $batch = $validated['batch'] ?? null;
        $startAcademicYear =  $validated['startAcademicYear'] ?? null;
        $academicBatch = StbAcademicBatch::create([
            'batch' => $batch,
            'start_academic_year' => $startAcademicYear,
            'grade_id' => $validated['grade']
        ]);
    
        try {
            // Perform the import, explicitly specifying the reader type
            Excel::import(new StudentInfoImport($academicBatch->id), $request->file('certificateInformationExcel'));
    
            return back()->with('success', 'Excel data imported successfully.');
        } catch (\Exception $e) {
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
