<?php

// use App\Http\Controllers\User\UsersController;

use App\Http\Controllers\Admin\User\ProfileController;
use App\Http\Controllers\Admin\User\UsersController;
use App\Http\Controllers\Admin\School\CertificateController;
use App\Http\Controllers\Admin\School\StbCertificateController;
use App\Http\Controllers\Admin\School\StbClCertificateController;
use App\Http\Controllers\Admin\School\StbGradeAController;
use App\Http\Controllers\GradeAController;
use App\Http\Controllers\Admin\University\CertificateController as UniversityCertificateController;
use App\Http\Controllers\Admin\University\NewsController;
use App\Http\Controllers\Admin\University\UtbCertificateController;
use App\Http\Controllers\VisitorController;
use App\Models\University\Certificate\UtbDegreeAcademicbatch;
use App\Models\VisitorInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// https://www.beltei.edu.kh/biue/images/batch15/showbatch15.php?f=208

// Redirect certificate
Route::get('{prefix}/images/batch{batchId}', function ($prefix, $batchId, Request $request) {    

    $degreeAcademicbatch = UtbDegreeAcademicbatch::where('batch' , $batchId)->first();
    session()->flash('sorry' , "We apologize for any inconvenience caused by our recent website update. To find your certificate, please use the new search feature on our site. If you need any assistance or have questions, feel free to contact our support team. Thank you for your understanding.");

    if($degreeAcademicbatch){
        $batch = $degreeAcademicbatch->id;
    
        
        return view('web.client.beltei_university.query_old_certificate.index', [
            'batch' => $batch,
        ]);
    }else{
        return redirect()->route('beltei_university.certificate' , ['degree' => 3 ]);
    }
    


})->where('prefix', 'biue|biuk');

Route::get('{prefix}/images/batch{batchId}/{filename?}', function ($prefix, $batchId, $filename = null, Request $request) {

    $degreeAcademicbatch = UtbDegreeAcademicbatch::where('batch' , $batchId)->first();
    session()->flash('sorry' , "We apologize for any inconvenience caused by our recent website update. To find your certificate, please use the new search feature on our site. If you need any assistance or have questions, feel free to contact our support team. Thank you for your understanding.");

    if($degreeAcademicbatch){
        $batch = $degreeAcademicbatch->id;
    
        
        return view('web.client.beltei_university.query_old_certificate.index', [
            'batch' => $batch,
        ]);
    }else{
        return redirect()->route('beltei_university.certificate', ['degree' => 3]);
    }

})->where('prefix', 'biue|biuk')->where('filename', '.*');




// Translate
Route::get('set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'kh' , 'ch'])) {
        session(['locale' => $locale]);
    }
    return back();
})->name('set-locale');


// link folder
Route::get('/storage-link' , function (){
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
    symlink($targetFolder , $linkFolder);
});

Route::get('/asset-link', function () {
    $targetFolder = public_path('asset');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/asset';

    try {
        // Check if the symlink already exists
        if (!file_exists($linkFolder)) {
            // Create the symbolic link
            symlink($targetFolder, $linkFolder);
            return 'Symbolic link created successfully.';
        } else {
            return 'Symbolic link already exists.';
        }
    } catch (\Throwable $e) {
        return 'Error creating symbolic link: ' . $e->getMessage();
    }
});

Route::get('/uploaded-link', function () {
    $targetFolder = public_path('uploaded');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/uploaded';

    try {
        // Check if the symlink already exists
        if (!file_exists($linkFolder)) {
            // Create the symbolic link
            symlink($targetFolder, $linkFolder);
            return 'Symbolic link created successfully.';
        } else {
            return 'Symbolic link already exists.';
        }
    } catch (\Throwable $e) {
        return 'Error creating symbolic link: ' . $e->getMessage();
    }
});


Route::get('/', function (Request $request ,VisitorController $controller) {
    $controller->handleVisitor($request);
    return view('welcome');
});

Route::post('/track-visitor', function (Request $request) {
    $visitor = VisitorInfo::create([
        'ip_address' => $request->input('ip_address'),
        'public_ip' => $request->input('public_ip'),
        'user_agent' => $request->input('user_agent'),
        'platform' => $request->input('platform'),
        'browser' => $request->input('browser'),
        'device' => $request->input('device'),
    ]);

    return response()->json(['success' => true, 'data' => $visitor]);
});



// client pages
Route::group(['prefix' => 'con', 'as' => 'contruction.', 'middleware' => 'visitor.tracking'], function () {
    Route::view('/' , 'web.client.contruction.index');
    Route::view('/construction' , 'web.client.contruction.construction')->name('construction');

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::view('/' , 'web.client.contruction.about.welcome')->name('welcome');
        Route::view('purpose' , 'web.client.contruction.about.purpose')->name('purpose');
        Route::view('vision' , 'web.client.contruction.about.vision')->name('vision');
        Route::view('history' , 'web.client.contruction.about.history')->name('history');
        Route::view('whybeltei' , 'web.client.contruction.about.whyBeltei')->name('whybeltei');

        Route::group(['prefix' => 'cambodia', 'as' => 'cambodia.'], function () {
            Route::view('brief-information' , 'web.client.contruction.about.about-cambodia.brief-information')->name('brief-information');
            Route::view('khmer-ancient-temple-legacy' , 'web.client.contruction.about.about-cambodia.khmer-ancient-temple-legacy')->name('khmer-ancient-temple-legacy');
            Route::view('cambodia-culture' , 'web.client.contruction.about.about-cambodia.cambodia-culture')->name('cambodia-culture');
        });

    });

    Route::group(['prefix' => 'recognition', 'as' => 'recognition.'], function () {
        Route::view('/national' , 'web.client.contruction.recognition.national')->name('national');
        Route::view('/international' , 'web.client.contruction.recognition.international')->name('international');
    });
    Route::group(['prefix' => 'location', 'as' => 'location'], function () {
        Route::view('/' , 'web.client.contruction.location.location');
    });
    Route::group(['prefix' => 'news-event', 'as' => 'news-event.'], function () {
        Route::view('/other' , 'web.client.contruction.news-event.other')->name('other');
    });

});


Route::group(['prefix' => 'bis', 'as' => 'school.' , 'middleware' => 'visitor.tracking'], function () {

    Route::view('/' , 'web.client.school.index');
    Route::view('/construction' , 'web.client.school.construction')->name('construction');

    

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::view('/' , 'web.client.school.about.welcome')->name('welcome');
        Route::view('purpose' , 'web.client.school.about.purpose')->name('purpose');
        Route::view('vision' , 'web.client.school.about.vision')->name('vision');
        Route::view('history' , 'web.client.school.about.history')->name('history');
        Route::view('whybeltei' , 'web.client.school.about.whyBeltei')->name('whybeltei');
        Route::view('belteigroup' , 'web.client.school.about.belteigroup')->name('belteigroup');
    });
    Route::group(['prefix' => 'mainprogram', 'as' => 'mainprogram.'], function () {
        Route::view('/khmer' , 'web.client.school.mainprogram.khmer')->name('khmer');
        Route::group(['prefix' => 'khmer', 'as' => 'khmer.'], function () {
            Route::view('/vision' , 'web.client.school.mainprogram.khmerdetail.vision')->name('vision');
            Route::view('/special-quality' , 'web.client.school.mainprogram.khmerdetail.special-quality')->name('special-quality');
            Route::view('/schedule' , 'web.client.school.mainprogram.khmerdetail.schedule')->name('schedule');
            Route::view('/admission' , 'web.client.school.mainprogram.khmerdetail.admission')->name('admission');
            Route::view('/awarding' , 'web.client.school.mainprogram.khmerdetail.awarding')->name('awarding');
            Route::view('/certificate' , 'web.client.school.mainprogram.khmerdetail.certificate')->name('certificate');
            Route::view('/preschool' , 'web.client.school.mainprogram.khmerdetail.preschool')->name('preschool');
            Route::view('/elementary' , 'web.client.school.mainprogram.khmerdetail.elementary')->name('elementary');
            Route::view('/junior' , 'web.client.school.mainprogram.khmerdetail.junior')->name('junior');
            Route::view('/highschool' , 'web.client.school.mainprogram.khmerdetail.highschool')->name('highschool');
        });

        Route::view('/ESL' , 'web.client.school.mainprogram.ESL')->name('ESL');
        Route::group(['prefix' => 'ESL', 'as' => 'ESL.'], function () {
            Route::view('/vision' , 'web.client.school.mainprogram.ESLdetail.vision')->name('vision');
            Route::view('/special-quality' , 'web.client.school.mainprogram.ESLdetail.special-quality')->name('special-quality');
            Route::view('/schedule' , 'web.client.school.mainprogram.ESLdetail.schedule')->name('schedule');
            Route::view('/admission' , 'web.client.school.mainprogram.ESLdetail.admission')->name('admission');
            Route::view('/awarding' , 'web.client.school.mainprogram.ESLdetail.awarding')->name('awarding');
            Route::view('/certificate' , 'web.client.school.mainprogram.ESLdetail.certificate')->name('certificate');
            Route::view('/preschool' , 'web.client.school.mainprogram.ESLdetail.preschool')->name('preschool');
            Route::view('/elementary' , 'web.client.school.mainprogram.ESLdetail.elementary')->name('elementary');
            Route::view('/junior' , 'web.client.school.mainprogram.ESLdetail.junior')->name('junior');
            Route::view('/highschool' , 'web.client.school.mainprogram.ESLdetail.highschool')->name('highschool');
        });

        Route::view('/CSL' , 'web.client.school.mainprogram.CSL')->name('CSL');
        Route::group(['prefix' => 'CSL', 'as' => 'CSL.'], function () {
            Route::view('/detail' , 'web.client.school.mainprogram.CSLdetail.CSLdetail')->name('detail');
            Route::view('/preschool' , 'web.client.school.mainprogram.CSLdetail.preschool')->name('preschool');
            Route::view('/young-learners' , 'web.client.school.mainprogram.CSLdetail.young-learners')->name('young-learners');
            Route::view('/adult-learners' , 'web.client.school.mainprogram.CSLdetail.adult-learners')->name('adult-learners');
            Route::view('/schedule' , 'web.client.school.mainprogram.CSLdetail.schedule')->name('schedule');
        });

        Route::view('/IMA' , 'web.client.school.mainprogram.IMA')->name('IMA');

        Route::view('/internation-preparation' , 'web.client.school.mainprogram.internation')->name('internation-preparation');
        Route::group(['prefix' => 'internation-preparation', 'as' => 'internation-preparation.'], function () {
            Route::view('/vision' , 'web.client.school.mainprogram.internationdetail.vision')->name('vision');
            Route::view('/TOEFL' , 'web.client.school.mainprogram.internationdetail.TOEFL')->name('TOEFL');
        });
    });
    Route::group(['prefix' => 'recognition', 'as' => 'recognition.'], function () {
        Route::view('/' , 'web.client.school.recognition.recognition');
        Route::view('/recognitiondetail' , 'web.client.school.recognition.recognitiondetail.recognitiondetail')->name('recognitiondetail');
    });
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::view('/' , 'web.client.school.news.news');
        Route::view('/' , 'web.client.school.news.news');
    });
    Route::group(['prefix' => 'campus', 'as' => 'campus.'], function () {
        Route::view('/campusTemplete' , 'web.client.school.campus.campusTemplete')->name('campusTemplete');
    });

    Route::get('grade/{grade}', [StbClCertificateController::class, 'certificateSection'])->name('certificate');
    Route::get('academicbatch/{academicbatch}', [StbClCertificateController::class, 'certificateBatchSection'])->name('certificate.detail');

    // Route::get('program/{program}/grade/{grade}', [CertificateController::class, 'certificateSection'])->name('certificate');
    // Route::get('program/{program}/grade/{grade}/year/{year}', [CertificateController::class, 'certificateBatchSection'])->name('certificate.detail');
    // Route::get('program/{program}/grade/{grade}', [CertificateController::class, 'certificateSection'])->name('certificate');
    // Route::group(['prefix' => 'certificate', 'as' => 'certificate.'], function () {
    //     Route::view('program/{program}/grade/{grade}/year/{year}' , 'web.client.school.certificate.certificate')->name('year');
    // });


    Route::view('/public-speaking' , 'web.client.school.public-speaking.grade12')->name('public-speaking');

    Route::view('/public-speaking/12' , 'web.client.school.public-speaking.grade12')->name('public-speaking-12');
    Route::view('/public-speaking/9' , 'web.client.school.public-speaking.grade9')->name('public-speaking-9');
    Route::view('/public-speaking/6' , 'web.client.school.public-speaking.grade6')->name('public-speaking-6');
    Route::view('/public-speaking/3' , 'web.client.school.public-speaking.grade3')->name('public-speaking-3');

    Route::view('/english-speaking/12' , 'web.client.school.english-speaking.grade12')->name('english-speaking-12');
    Route::view('/english-speaking/9' , 'web.client.school.english-speaking.grade9')->name('english-speaking-9');
    Route::view('/english-speaking/6' , 'web.client.school.english-speaking.grade6')->name('english-speaking-6');
    Route::view('/english-speaking/3' , 'web.client.school.english-speaking.grade3')->name('english-speaking-3');


    Route::view('/khmer/debate/10' , 'web.client.school.debate.khmer.debate10')->name('khmer-debate-10');
    Route::view('/khmer/debate/8' , 'web.client.school.debate.khmer.debate8')->name('khmer-debate-8');
    Route::view('/khmer/debate/6' , 'web.client.school.debate.khmer.debate6')->name('khmer-debate-6');

    Route::view('/english/debate/12' , 'web.client.school.debate.english.debate12')->name('english-debate-12');
    Route::view('/english/debate/9' , 'web.client.school.debate.english.debate9')->name('english-debate-9');



    Route::group(['prefix' => 'outstanding-student', 'as' => 'outstanding-student.'], function () {

        Route::view('/national' , 'web.client.school.outstanding-student.national.index')->name('national');
        Route::view('/city' , 'web.client.school.outstanding-student.city.index')->name('city');

        Route::get('/grade-A', [GradeAController::class, 'client'])->name('grade-A');

    });


});

Route::group(['prefix' => 'testcenter', 'as' => 'testcenter.' , 'middleware' => 'visitor.tracking'], function () {

    Route::view('/' , 'web.client.testcenter.index');
    Route::view('/construction' , 'web.client.beltei_tours_travel.construction')->name('construction');

    

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::view('/' , 'web.client.testcenter.about.welcome')->name('welcome');
        Route::view('purpose' , 'web.client.testcenter.about.purpose')->name('purpose');
        Route::view('vision' , 'web.client.testcenter.about.vision')->name('vision');
        Route::view('history' , 'web.client.testcenter.about.history')->name('history');
        Route::view('whybeltei' , 'web.client.testcenter.about.whyBeltei')->name('whybeltei');
    });
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        // Route::view('/bacll-batch18' , 'web.client.testcenter.news.bacll-batch18')->name('bacll-batch18');
    });
    Route::group(['prefix' => 'campus', 'as' => 'campus.'], function () {
        Route::view('/campusTemplete' , 'web.client.testcenter.campus.campusTemplete')->name('campusTemplete');
    });

});

Route::get('new/detail/{id}', [NewsController::class, 'show'])->name('beltei_university.news.detail');

Route::group(['prefix' => 'biu', 'as' => 'beltei_university.' , 'middleware' => 'visitor.tracking'], function () {

    Route::view('/' , 'web.client.beltei_university.index');
    Route::view('/construction' , 'web.client.beltei_university.construction')->name('construction');
    

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::view('/' , 'web.client.beltei_university.about.welcome')->name('welcome');

        Route::view('/belteigroup' , 'web.client.beltei_university.about.belteigroup')->name('belteigroup');

        Route::view('purpose' , 'web.client.beltei_university.about.purpose')->name('purpose');
        Route::view('vision' , 'web.client.beltei_university.about.vision')->name('vision');
        Route::view('history' , 'web.client.beltei_university.about.history')->name('history');
        Route::view('whybeltei' , 'web.client.beltei_university.about.whyBeltei')->name('whybeltei');
        Route::view('sturcture' , 'web.client.beltei_university.about.sturcture')->name('sturcture');
        Route::view('pre_bachelor' , 'web.client.beltei_university.5_main_program.pre_bachelor')->name('pre_bachelor');

        // Route::view('campus' , 'web.client.beltei_university.about.whyBeltei')->name('campus');

    });

    Route::group(['prefix' => 'mainprogram', 'as' => 'mainprogram.'], function () {
        Route::view('/khmer' , 'web.client.beltei_university.mainprogram.khmer')->name('khmer');
        Route::group(['prefix' => 'khmer', 'as' => 'khmer.'], function () {
            Route::view('/vision' , 'web.client.beltei_university.mainprogram.khmerdetail.vision')->name('vision');
            Route::view('/special-quality' , 'web.client.beltei_university.mainprogram.khmerdetail.special-quality')->name('special-quality');
            Route::view('/schedule' , 'web.client.beltei_university.mainprogram.khmerdetail.schedule')->name('schedule');
            Route::view('/admission' , 'web.client.beltei_university.mainprogram.khmerdetail.admission')->name('admission');
            Route::view('/awarding' , 'web.client.beltei_university.mainprogram.khmerdetail.awarding')->name('awarding');
            Route::view('/certificate' , 'web.client.beltei_university.mainprogram.khmerdetail.certificate')->name('certificate');
            Route::view('/preschool' , 'web.client.beltei_university.mainprogram.khmerdetail.preschool')->name('certificate');


        });
        Route::view('/prebachelor' , 'web.client.beltei_university.mainprogram.prebachelor')->name('prebachelor');
        Route::view('/associate' , 'web.client.beltei_university.mainprogram.associate')->name('associate');
        Route::view('/bachelor' , 'web.client.beltei_university.mainprogram.bachelor')->name('bachelor');
        Route::view('/master' , 'web.client.beltei_university.mainprogram.master')->name('master');
        Route::view('/doctor' , 'web.client.beltei_university.mainprogram.doctor')->name('doctor');

        Route::view('/' , 'web.client.beltei_university.mainprogram.degree')->name('degree');


    });

    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::view('/' , 'web.client.beltei_university.news.news');
        // Route::view('/detail/{id}' , 'web.client.beltei_university.news.detail');
        // Route::get('detail/{id}', [NewsController::class, 'show'])->name('detail');

    });

    Route::group(['prefix' => 'campus', 'as' => 'campus.'], function () {
        Route::view('/campusTemplete' , 'web.client.beltei_university.campus.campusTemplete')->name('campusTemplete');
    });

    Route::view('/faculty' , 'web.client.beltei_university.faculty.faculty_detail')->name('faculty-detail');


    Route::group(['prefix' => 'recognition', 'as' => 'recognition.'], function () {
        Route::view('/' , 'web.client.beltei_university.recognition.recognition');
        Route::view('/recognitiondetail' , 'web.client.beltei_university.recognition.recognitiondetail.recognitiondetail')->name('recognitiondetail');
    });
    Route::group(['prefix' => 'mou', 'as' => 'mou.'], function () {
        Route::view('/national' , 'web.client.beltei_university.mou.national')->name('national');
        Route::view('/international' , 'web.client.beltei_university.mou.international')->name('international');
    });


    Route::group(['prefix' => 'graduated', 'as' => 'graduated.'], function () {
        Route::view('/doctor' , 'web.client.beltei_university.graduated.doctor.index')->name('doctor');
        Route::view('/doctor/detail' , 'web.client.beltei_university.graduated.doctor.detail')->name('doctor.detail');
    });


    Route::get('degree/{degree}', [UniversityCertificateController::class, 'certificateSection'])->name('certificate');
    Route::get('degree/{degree}/batch/{batch}', [UniversityCertificateController::class, 'certificateBatchSection'])->name('certificate.detail');


    Route::view('/speakingk1' , 'web.client.beltei_university.speaking.khmer_speaking_year1')->name('khmer_speaking_year1');
    Route::view('/speakingk2' , 'web.client.beltei_university.speaking.khmer_speaking_year2')->name('khmer_speaking_year2');
    Route::view('/speakingk3' , 'web.client.beltei_university.speaking.khmer_speaking_year3')->name('khmer_speaking_year3');
    Route::view('/speakingk4' , 'web.client.beltei_university.speaking.khmer_speaking_year4')->name('khmer_speaking_year4');
    Route::view('/speakinge1' , 'web.client.beltei_university.speaking.english_speaking_year1')->name('english_speaking_year1');
    Route::view('/speakinge2' , 'web.client.beltei_university.speaking.english_speaking_year2')->name('english_speaking_year2');
    Route::view('/speakinge3' , 'web.client.beltei_university.speaking.english_speaking_year3')->name('english_speaking_year3');
    Route::view('/speakinge4' , 'web.client.beltei_university.speaking.english_speaking_year4')->name('english_speaking_year4');



});

Route::group(['prefix' => 'tour', 'as' => 'beltei_tours_travel.' , 'middleware' => 'visitor.tracking'], function () {

    Route::view('/' , 'web.client.beltei_tours_travel.index');
    Route::view('/construction' , 'web.client.beltei_tours_travel.construction')->name('construction');

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::view('/' , 'web.client.beltei_tours_travel.about.welcome')->name('welcome');
        Route::view('purpose' , 'web.client.beltei_tours_travel.about.purpose')->name('purpose');
        Route::view('vision' , 'web.client.beltei_tours_travel.about.vision')->name('vision');
        Route::view('history' , 'web.client.beltei_tours_travel.about.history')->name('history');
        Route::view('whybeltei' , 'web.client.beltei_tours_travel.about.whyBeltei')->name('whybeltei');

        Route::group(['prefix' => 'cambodia', 'as' => 'cambodia.'], function () {
            Route::view('brief-information' , 'web.client.beltei_tours_travel.about.about-cambodia.brief-information')->name('brief-information');
            Route::view('khmer-ancient-temple-legacy' , 'web.client.beltei_tours_travel.about.about-cambodia.khmer-ancient-temple-legacy')->name('khmer-ancient-temple-legacy');
            Route::view('cambodia-culture' , 'web.client.beltei_tours_travel.about.about-cambodia.cambodia-culture')->name('cambodia-culture');
        });

    });

    Route::group(['prefix' => 'recognition', 'as' => 'recognition.'], function () {
        Route::view('/national' , 'web.client.beltei_tours_travel.recognition.national')->name('national');
        Route::view('/international' , 'web.client.beltei_tours_travel.recognition.international')->name('international');
    });
    Route::group(['prefix' => 'location', 'as' => 'location'], function () {
        Route::view('/' , 'web.client.beltei_tours_travel.location.location');
    });
    Route::group(['prefix' => 'news-event', 'as' => 'news-event.'], function () {
        Route::view('/other' , 'web.client.beltei_tours_travel.news-event.other')->name('other');
    });


    Route::group(['prefix' => 'mainprogram', 'as' => 'mainprogram.'], function () {
        Route::group(['prefix' => 'domestic', 'as' => 'domestic.'], function () {
            Route::view('/cambodian' , 'web.client.beltei_tours_travel.mainprogram.domestic.cambodian')->name('cambodian');
            Route::view('/expatrate' , 'web.client.beltei_tours_travel.mainprogram.domestic.expatrate')->name('expatrate');
            Route::view('/expatrate/detail' , 'web.client.beltei_tours_travel.mainprogram.domestic.expatrate.expatrate-detail')->name('expatrate-detail');
        });
        Route::group(['prefix' => 'inbound', 'as' => 'inbound.'], function () {
            Route::view('/' , 'web.client.beltei_tours_travel.mainprogram.inbound.inbound');
            Route::view('detail' , 'web.client.beltei_tours_travel.mainprogram.inbound.detail')->name('detail');
        });
        Route::group(['prefix' => 'outbound', 'as' => 'outbound.'], function () {
            Route::view('/' , 'web.client.beltei_tours_travel.mainprogram.outbound.outbound');
            Route::view('detail' , 'web.client.beltei_tours_travel.mainprogram.outbound.detail')->name('detail');
        });
    });


    Route::group(['prefix' => 'job-announcement', 'as' => 'job-announcement.'], function () {
        Route::view('/staff' , 'web.client.beltei_tours_travel.job-announcement.staff')->name('staff');
        Route::view('/freelance' , 'web.client.beltei_tours_travel.job-announcement.freelance')->name('freelance');
        Route::view('/tour-leader' , 'web.client.beltei_tours_travel.job-announcement.tour-leader')->name('tour-leader');
    });

    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::view('/passport' , 'web.client.beltei_tours_travel.service.passport')->name('passport');

    });

    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::view('/' , 'web.client.beltei_tours_travel.news.news');
    });


});

Route::group(['prefix' => 'bir', 'as' => 'relation.' , 'middleware' => 'visitor.tracking'], function () {

    Route::view('/' , 'web.client.relation.index');
    Route::view('/construction' , 'web.client.beltei_tours_travel.construction')->name('construction');


    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::view('/' , 'web.client.relation.about.welcome')->name('welcome');
        Route::view('purpose' , 'web.client.relation.about.purpose')->name('purpose');
        Route::view('vision' , 'web.client.relation.about.vision')->name('vision');
        Route::view('history' , 'web.client.relation.about.history')->name('history');
        Route::view('whybeltei' , 'web.client.relation.about.whyBeltei')->name('whybeltei');
    });

    Route::group(['prefix' => 'recognition', 'as' => 'recognition.'], function () {
        Route::view('/' , 'web.client.relation.recognition.recognition');
        Route::view('/recognitiondetail' , 'web.client.relation.recognition.recognitiondetail.recognitiondetail')->name('recognitiondetail');
    });
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::view('/' , 'web.client.relation.news.news');
    });
    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::view('/first_service' , 'web.client.relation.service.first_service')->name('first_service');
        Route::view('/second_service' , 'web.client.relation.service.second_service')->name('second_service');
        Route::view('/third_service' , 'web.client.relation.service.third_service')->name('third_service');
        Route::view('/fourth_service' , 'web.client.relation.service.fourth_service')->name('fourth_service');
        Route::view('/fifth_service' , 'web.client.relation.service.fifth_service')->name('fifth_service');

    });
    Route::group(['prefix' => 'mou', 'as' => 'mou.'], function () {
        Route::view('/recognition' , 'web.client.relation.mou.recognition')->name('recognition');
        Route::view('/national' , 'web.client.relation.mou.national')->name('national');
        Route::view('/international' , 'web.client.relation.mou.international')->name('international');

    });
    Route::group(['prefix' => 'partner_university', 'as' => 'partner_university.'], function () {
        Route::view('/regent_university' , 'web.client.relation.partner_university.regent_university')->name('regent_university');
        Route::view('/cambridge' , 'web.client.relation.partner_university.cambridge_totors')->name('cambridge');
        Route::view('/yorkStJohn_university' , 'web.client.relation.partner_university.yorkStJohn_university')->name('yorkStJohn_university');
        Route::view('/kuala_lumpur' , 'web.client.relation.partner_university.kuala_lumpur_university')->name('kuala_lumpur');
        Route::view('/curtin' , 'web.client.relation.partner_university.curtin_university')->name('curtin');
        Route::view('/taylor' , 'web.client.relation.partner_university.taylor_university')->name('taylor');
        Route::view('/easb' , 'web.client.relation.partner_university.easb_university')->name('easb');






    });
    Route::get('program/{program}/grade/{grade}', [CertificateController::class, 'certificateSection'])->name('certificate');
    Route::group(['prefix' => 'certificate', 'as' => 'certificate.'], function () {
        Route::view('program/{program}/grade/{grade}/year/{year}' , 'web.client.relation.certificate.certificate')->name('year');
    });


    Route::view('/public-speaking' , 'web.client.relation.public-speaking.grade12')->name('public-speaking');

    Route::view('/public-speaking/12' , 'web.client.relation.public-speaking.grade12')->name('public-speaking-12');
    Route::view('/public-speaking/9' , 'web.client.relation.public-speaking.grade9')->name('public-speaking-9');
    Route::view('/public-speaking/6' , 'web.client.relation.public-speaking.grade6')->name('public-speaking-6');
    Route::view('/public-speaking/3' , 'web.client.relation.public-speaking.grade3')->name('public-speaking-3');

    Route::view('/english-speaking/12' , 'web.client.relation.english-speaking.grade12')->name('english-speaking-12');
    Route::view('/english-speaking/9' , 'web.client.relation.english-speaking.grade9')->name('english-speaking-9');
    Route::view('/english-speaking/6' , 'web.client.relation.english-speaking.grade6')->name('english-speaking-6');
    Route::view('/english-speaking/3' , 'web.client.relation.english-speaking.grade3')->name('english-speaking-3');


    Route::view('/khmer/debate/10' , 'web.client.relation.debate.khmer.debate10')->name('khmer-debate-10');
    Route::view('/khmer/debate/8' , 'web.client.relation.debate.khmer.debate8')->name('khmer-debate-8');
    Route::view('/khmer/debate/6' , 'web.client.relation.debate.khmer.debate6')->name('khmer-debate-6');

    Route::view('/english/debate/12' , 'web.client.relation.debate.english.debate12')->name('english-debate-12');
    Route::view('/english/debate/9' , 'web.client.relation.debate.english.debate9')->name('english-debate-9');



    Route::group(['prefix' => 'outstanding-student', 'as' => 'outstanding-student.'], function () {

        Route::view('/national' , 'web.client.relation.outstanding-student.national.index')->name('national');
        Route::view('/city' , 'web.client.relation.outstanding-student.city.index')->name('city');

        Route::get('/grade-A', [GradeAController::class, 'client'])->name('grade-A');

    });


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// admin pages
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'can:access-admin-page']], function () {
    // Dashboard
    Route::get('/', function () {
        return view('web.admin.index');
    });

    // User Management
    Route::prefix('user')->group(function () {
        Route::resource('/', UsersController::class)->names('user');
        Route::resource('profile', ProfileController::class)->names('user.profile');
        Route::get('/resetpassword', [ProfileController::class, 'indexReset'])->name('user.profile.reset');
    });

    // School Management
    Route::prefix('school')->as('school.')->middleware('can:access-school-page')->group(function () {

        // Route::resource('certificate',StbCertificateController::class)->names('certificate');
        Route::resource('certificate-new',StbCertificateController::class)->names('certificate-new');

        Route::resource('certificate',CertificateController::class)->names('certificate');
        Route::prefix('certificate')->as('certificate')->group(function () {
            Route::post('/store/file', [CertificateController::class, 'uploadLargeFiles'])->name('.files.upload.large');
            Route::post('/your-route', [CertificateController::class, 'processData'])->name('.excel.upload');
        });


        // Route::resource('grade-A' , GradeAController::class)->names('grade-A');
        // Route::resource('grade-A',GradeAController::class)->names('grade-A');
        Route::prefix('grade-A')->as('grade-A')->group(function () {
            Route::post('/store/file', [GradeAController::class, 'uploadLargeFiles'])->name('.files.upload.large');
            Route::post('/your-route', [GradeAController::class, 'processData'])->name('.excel.upload');
        });


        Route::resource('grade-A', StbGradeAController::class)->names('grade-A');
        
    });

    // School Management
    Route::prefix('university')->as('university.')->middleware('can:access-university-page')->group(function () {

        // Route::resource('certificate',UtbCertificateController::class)->names('certificate');
        Route::resource('certificate-new',UtbCertificateController::class)->names('certificate-new');

        Route::resource('certificate',UniversityCertificateController::class)->names('certificate');
        Route::prefix('certificate')->as('certificate')->group(function () {
            Route::post('/store/file', [UniversityCertificateController::class, 'uploadLargeFiles'])->name('.files.upload.large');
            Route::post('/your-route', [UniversityCertificateController::class, 'processData'])->name('.excel.upload');
        });


        // Route::resource('grade-A' , GradeAController::class)->names('grade-A');
        Route::resource('grade-A',GradeAController::class)->names('grade-A');
        Route::prefix('grade-A')->as('grade-A')->group(function () {
            Route::post('/store/file', [GradeAController::class, 'uploadLargeFiles'])->name('.files.upload.large');
            Route::post('/your-route', [GradeAController::class, 'processData'])->name('.excel.upload');
        });


        Route::resource('news',NewsController::class)->names('news');



    });


    Route::resource('news',NewsController::class)->names('news');
    // Route::get('set-new-category/{locale}', function ($locale) {
    //     if (in_array($locale, ['en', 'kh' , 'ch'])) {
    //         session(['locale' => $locale]);
    //     }
    //     return back();
    // })->name('set-new-category');
});
