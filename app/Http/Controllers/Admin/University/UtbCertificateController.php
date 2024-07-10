<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Imports\University\StudentInfoImport;
use App\Models\University\Certificate\UtbDegreeAcademicbatch;
use App\Models\University\Certificate\UtbStudentInfo;
use App\Models\University\Degree;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class UtbCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $degrees = Degree::get();
        return view('web.admin.university.new-certificate.index' , compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $degrees = Degree::get();
        return view('web.admin.university.new-certificate.create' , compact('degrees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $inputs = $request->all();
        // dd($inputs);
        
        $batch = $inputs['batch'] ?? null;
        $startAcademicYear =  $inputs['startAcademicYear'] ?? null;
        $academicBatch = UtbDegreeAcademicbatch::create([
            'degree_id' => $inputs['degree'],
            'batch' => $batch,
            'academic_year' => $startAcademicYear,
            // 'grade_id' => $inputs['grade']
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
    public function show(string $id)
    {
        $academicBatch = UtbDegreeAcademicbatch::where('id', $id)->first();

        $academicBatchId = $id;
        $degreeId = $academicBatch->degree->id;
        
        $studentInfo = $academicBatch->studentInfo()->paginate(25);
        return view('web.admin.university.new-certificate.show' , compact('studentInfo' , 'degreeId' , 'academicBatchId'));
        //
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
