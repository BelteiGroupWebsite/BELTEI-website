<?php

namespace App\Http\Controllers\Admin\School;

use App\Http\Controllers\Controller;
use App\Models\school\Certificate;
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
        $certificate = Certificate::paginate(10);
        return view('web.admin.school.certificate.index', compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('web.admin.school.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request = $request->all();

        dd($request);
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
        $certificate = Certificate::where('id', $id)->first();
        return view('web.admin.school.certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate request data
        $request->validate([
            'khmer_name' => 'required',
            'english_name' => 'required',
            'gender' => 'required',
            'nation' => 'required',
            'dob' => 'required',
            'campus' => 'required',
            'studentProfileImg' => 'image|mimes:jpg', // Example validation for image file
        ]);

        $certificate = Certificate::findOrFail($id);

        // Update certificate data
        $certificate->update([
            'name_kh' => $request->input('khmer_name'),
            'name_eng' => $request->input('english_name'),
            'gender' => $request->input('gender'),
            'nation' => $request->input('nation'),
            'dob' => $request->input('dob'),
            'campus' => $request->input('campus'),
        ]);

        $this->uploudFile($request, "studentProfileImg", $certificate, "profile", $certificate->name_eng);

        // Handle file upload
        // if ($request->hasFile('studentProfileImg')) {
        //     $folderName ="profile";
        //     $file = $request->file('studentProfileImg');
        //     $folder = "certificate/" . $certificate->grade . "/" . $certificate->batch_startYear . "/" . $certificate->identify_user . "/" . $folderName;

        //     $extension = $file->getClientOriginalExtension();
        //     $cleanFileName = str_replace(' ', '', $certificate->name_eng);
        //     $certificate = $cleanFileName .'.' . $extension;
        //     $file->move(public_path($folder),$certificate);
        // }

        return redirect()->back();

        // Optionally, you can return a response or redirect here
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




        session(['excelData' => $datas[0]]);
        session(['grade' => $datas[1]]);
        session(['batch_startYear' => $datas[2]]);
        session(['program' => $datas[3]]);

        $identify = time();
        session(['identify' => $identify]);

        try {
            foreach ($datas[0] as $data) {

                $certi = str_replace(' ', '', $data[0]);
                $moey_id = str_replace(' ', '', $data[7]);

                Certificate::create([
                    'certi_no' => $certi,
                    'name_kh' => $data[1],
                    'name_eng' => $data[2],
                    'gender' => $data[3],
                    'nation' => $data[4],
                    'dob' => $data[5],
                    'campus' => $data[6],
                    'grade' => session('grade'),
                    'batch_startYear' => session('batch_startYear'),
                    'identify_user' => $identify,
                    'moey_id' => $moey_id,
                    'program' => session('program'),
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
    
                $folder = "certificate/" .session('program'). '/'. session('grade') . "/" . session('batch_startYear') . "/" . session('identify') . "/" . $folder;
    
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


    public function uploudFile($request, $inputFile, $certificate, $folderName,  $entity)
    {
        if ($request->hasFile($inputFile)) {

            $folder = "certificate/" . $certificate->grade . "/" . $certificate->batch_startYear . "/" . $certificate->identify_user . "/" . $folderName;

            try {
                unlink($folder . str_replace(' ', '', $entity) . "jpg");
            } catch (\Exception $e) {
            }


            $file = $request->file($inputFile);

            $extension = $file->getClientOriginalExtension();
            $cleanFileName = str_replace(' ', '', $entity);
            $fileUpload = $cleanFileName . '.' . $extension;
            $file->move(public_path($folder), $fileUpload);
        }
    }



    // cliend side

    public function certificateSection($program , $grade)
    {
        $batchYears = Certificate::
            where('program', $program)
            ->where('grade', $grade)
            ->select('batch_startYear', 'identify_user')
            ->groupBy('batch_startYear', 'identify_user')
            ->pluck('batch_startYear', 'identify_user')
            ->sortDesc();
        

        $studentsPerYear = Certificate::
            where('program' , $program)
            ->where('grade', $grade)
            ->groupBy('batch_startYear')
            ->selectRaw('batch_startYear, COUNT(*) as total_students')
            ->pluck('total_students', 'batch_startYear');

        $femaleStudentPerYear = Certificate::
            where('program' , $program)
            ->where('grade', $grade)
            ->where('gender', 'Female')
            ->groupBy('batch_startYear')
            ->selectRaw('batch_startYear, COUNT(*) as female_students')
            ->pluck('female_students', 'batch_startYear');

        $certificateNoStartToEndPerYear = Certificate::
            where('program' , $program)
            ->where('grade', $grade)
            ->groupBy('batch_startYear')
            ->selectRaw('batch_startYear, MIN(certi_no) as start_certificate')
            ->pluck('start_certificate');

        return view('web.client.school.certificate.index', [
            'program' => $program,
            'grade' => $grade,
            'batchYears' => $batchYears,
            'studentsPerYear' => $studentsPerYear,
            'femaleStudentPerYear' => $femaleStudentPerYear,
            'certificateNoStartToEndPerYear' => $certificateNoStartToEndPerYear,
        ]);
    }

}
