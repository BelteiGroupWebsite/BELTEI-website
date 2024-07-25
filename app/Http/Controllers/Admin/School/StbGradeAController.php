<?php

namespace App\Http\Controllers\Admin\School;

use App\Http\Controllers\Controller;
use App\Imports\School\GradeAImport;
use App\Models\school\AcademicYear;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StbGradeAController extends Controller
{

    public function client()
    {
        
        $gradeAs = AcademicYear::with('studentGradeA')->paginate(10);

        return view('web.client.school.outstanding-student.grade-A.index', compact('gradeAs'));
    }
    
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $gradeAs = AcademicYear::with('studentGradeA')->get();

        // dd($gradeAs->first()->studentGradeA);
        
        return view('web.admin.school.gradeA.index' , compact('gradeAs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.admin.school.gradeA.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $academicYear = AcademicYear::create([
            'start_academic_year' => $request->input('startAcademicYear'),
        ]);

        Excel::import(new GradeAImport($academicYear->id), $request->file('certificateInformationExcel'));

        return back()->with('success' , "successfully !");

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
}
