<?php

namespace App\Http\Controllers;

use App\Models\School\AcademicYear;
use App\Models\School\GradeA;
use App\Models\School\StudentGradeA;
use Illuminate\Http\Request;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class GradeAController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function client(Request $request)
    {
        // Paginate AcademicYear records
        $gradeAs = AcademicYear::paginate(10);

        // Paginate studentGradeA records for each AcademicYear
        $gradeAs->each(function ($academicYear) use ($request) {
            $academicYear->studentGradeAPaginated = $academicYear->studentGradeA()->paginate(10, ['*'], 'studentGradeAPage', $request->input('studentGradeAPage', 1));
        });



        return view('web.client.school.outstanding-student.grade-A.index', compact('gradeAs'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return view('web.admin.school.gradeA.index');
        return view('web.admin.school.gradeA.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('web.admin.school.gradeA.create');
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



    // public function processData(Request $request)
    // {
    //     $datas = $request->input('data');




    //     session(['excelData' => $datas[0]]);
    //     session(['academic_year' => $datas[1]]);

    //     $identify = time();
    //     session(['identify' => $identify]);

    //     $academicYear = AcademicYear::create([
    //         'start_academic_year' => session('academic_year'),
    //     ]);
        
    //     $academicYearId = $academicYear->id;
        
    //     try {
    //         foreach ($datas[0] as $data) {

    //             GradeA::create([
    //                 'khmer_name' => $data[0],
    //                 'latin_name' => $data[1],
    //                 'academic_year_id' => $academicYearId,
    //                 'campus_id' => $data[2],
    //                 'identify_user' => session('identify'),
    //             ]);
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json(['message' => $e->getMessage()]);
    //     }

    //     return response()->json(['message' => session('grade')]);
    // }


    public function processData(Request $request)
    {
        $datas = $request->input('data');
        session(['excelData' => $datas[0]]);
        session(['academic_year' => $datas[1]]);
        $identify = time();
        session(['identify' => $identify]);

        
        try {
            $academicYear = AcademicYear::create([
                'start_academic_year' => session('academic_year'),
            ]);
    
            $academicYearId = $academicYear->id;
            foreach ($datas[0] as $data) {
                StudentGradeA::create([
                    'khmer_name' => $data[0],
                    'latin_name' => $data[1],
                    'academic_year_id' => $academicYearId,
                    'campus_id' => $data[2],
                    'identify_user' => session('identify'),
                ]);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error processing data: ' . $e->getMessage()], 500);
        }

        return response()->json(['message' => 'Data processed successfully']);
    }


    public function uploadLargeFiles(Request $request)
    {


        try {
            $folder = $request->input('folder');

            $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

            if (!$receiver->isUploaded()) {
            }

            $fileReceived = $receiver->receive(); // receive file

            if ($fileReceived->isFinished()) { // file uploading is complete / all chunks are uploaded
                $file = $fileReceived->getFile(); // get file
                $extension = $file->getClientOriginalExtension();
                $fileName = str_replace('.' . $extension, '', $file->getClientOriginalName()); // file name without extension

                // $cleanFileName = $fileName;

                $cleanFileName = preg_replace('/[^A-Za-z0-9_.-]/', '', str_replace(' ', '', $fileName));

                $cleanFileName .= '.' . $extension;

                $folder = "gradeA/" . session('academic_year') . "/" . session('identify') . "/" . $folder;

                // $fileFolder = $folder.'/'.$cleanFileName;

                $file->move(public_path($folder), $cleanFileName);
            }

            $handler = $fileReceived->handler();
            return [
                'done' => $handler->getPercentageDone(),
                'status' => true
            ];
        } catch (\Exception $e) {
            return $e;
        }
    }
}
