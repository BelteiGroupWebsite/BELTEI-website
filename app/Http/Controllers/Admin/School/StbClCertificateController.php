<?php

namespace App\Http\Controllers\Admin\School;

use App\Http\Controllers\Controller;
use App\Models\School\Certificate\StbAcademicBatch;
use App\Models\School\Certificate\StbGrade;
use App\Models\School\Certificate\StbProgram;
use App\Models\School\Certificate\StbStudentInfo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class StbClCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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

    public function certificateSection($grade_id){

        // $program = StbProgram::where('id' , $program)->first();

        $grades = StbGrade::where('id' , $grade_id)->first();

        // dd($grades->academicBatch);
        
        return view('web.client.school.certificate.index' , compact('grades'));
        
    }
    
    public function certificateBatchSection($academicbatch){
        // $academicBatch = StbAcademicBatch::where('id', $academicbatch)->first();

        // $academicBatchId = $academicBatch->id;
        $academicBatchId = $academicbatch;
        // $gradeId = $academicBatch->grade->id;
        // $programId = $academicBatch->grade->program->id;
        
        // $studentInfo = $academicBatch->studentInfo()->paginate(30); // Change 10 to the number of records per page you want  

        // dd($studentInfo);
        
        // return view('web.client.school.certificate.detail' , compact('studentInfo' , 'programId' , 'gradeId' , 'academicBatchId'));
        return view('web.client.school.certificate.detail' , compact('academicBatchId'));
    }
}
