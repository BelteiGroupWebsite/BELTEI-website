<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Models\school\AcademicYear;
use App\Models\University\AcademicBatch;
use App\Models\University\Certificate;
use App\Models\University\Degree;
use Illuminate\Http\Request;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
        $degrees = Degree::get();
        // foreach($degrees as $degree){
        //     echo $degree->certificate;
        // }
        // dd($degrees);
        return view('web.admin.university.certificate.index', compact('degrees'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $degrees = Degree::get();
        return view('web.admin.university.certificate.create' , compact('degrees'));
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






    public function processData(Request $request)
    {
        $datas = $request->input('data');


        session([
            'excelData' => $datas[0],
            'degree' => $datas[1],
            'biu_academic_year' => $datas[2],
            'identify' => $identify = time(),
        ]);


        $identify = time();
        session(['identify' => $identify]);

        try {
            $academicYear = AcademicBatch::firstOrCreate([
                'start_academic_year' => session('biu_academic_year'),
                'batch' => $datas[3],
                'degree_id' => $datas[1]
            ]);
            

            foreach ($datas[0] as $data) {

                $certi = str_replace(' ', '', $data[0]);

                Certificate::create([
                    'certi_no' => $certi,
                    'name_kh' => $data[1],
                    'name_eng' => $data[2],
                    'gender' => $data[3],
                    'student_id' => $data[4],
                    'dob' => $data[5],
                    'academic_year_id' => $academicYear->id,
                    'major_id' => $data[6],
                    'degree_id' => $datas[1], // lub

                    'identify_user' => $identify,

                ]);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }

        return response()->json(['message' => session('grade')]);
    }

    public function uploadLargeFiles(Request $request)
    {


        try{
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
    
                if ($folder === "reference") {
                    $cleanFileName = $folder;
                } else {
                    $cleanFileName = preg_replace('/[^A-Za-z0-9_.-]/', '', str_replace(' ', '', $fileName));
                    // $cleanFileName = preg_replace('/[^A-Za-z0-9_.-\s]/', '', str_replace(' ', '', $fileName));
                }
                $cleanFileName .= '.' . $extension;
    
                $folder = "certificate/" .session('degree'). '/'. session('biu_academic_year') . "/" . session('identify') . "/" . $folder;
    
                // $fileFolder = $folder.'/'.$cleanFileName;
    
                $file->move(public_path($folder), $cleanFileName);
    
            }
    
            $handler = $fileReceived->handler();
            return [
                'done' => $handler->getPercentageDone(),
                'status' => true
            ];
        }catch(\Exception $e){
            return $e;
        }   
    }




    
    public function certificateSection($degree){

        $academicBatches = AcademicBatch::where('degree_id' , $degree)->get();
        return view('web.client.beltei_university.graduated.index' , compact('academicBatches'));
    }


    
    public function certificateBatchSection($degree , $batch){

        $academicBatches = AcademicBatch::where('degree_id' , $degree)->where('batch' , $batch)->get();
        return view('web.client.beltei_university.graduated.detail' , compact('academicBatches'));
    }
    
}
