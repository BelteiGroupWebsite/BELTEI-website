<?php

// use App\Http\Controllers\User\UsersController;

use App\Http\Controllers\Admin\User\ProfileController;
use App\Http\Controllers\Admin\User\UsersController;
use App\Http\Controllers\Admin\School\CertificateController;
use App\Http\Controllers\GradeAController;
use App\Http\Controllers\Admin\University\CertificateController as UniversityCertificateController;
use App\Models\school\Certificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Translate
Route::get('set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'kh' , 'ch'])) {
        session(['locale' => $locale]);
    }
    return back();
})->name('set-locale');




Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'school', 'as' => 'school.'], function () {

    Route::view('/' , 'web.client.school.index');

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::view('/' , 'web.client.school.about.welcome')->name('welcome');
        Route::view('purpose' , 'web.client.school.about.purpose')->name('purpose');
        Route::view('vision' , 'web.client.school.about.vision')->name('vision');
        Route::view('history' , 'web.client.school.about.history')->name('history');
        Route::view('whybeltei' , 'web.client.school.about.whyBeltei')->name('whybeltei');
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
    });
    Route::group(['prefix' => 'campus', 'as' => 'campus.'], function () {
        Route::view('/campusTemplete' , 'web.client.school.campus.campusTemplete')->name('campusTemplete');
    });
    Route::get('program/{program}/grade/{grade}', [CertificateController::class, 'certificateSection'])->name('certificate');
    Route::group(['prefix' => 'certificate', 'as' => 'certificate.'], function () {
        Route::view('program/{program}/grade/{grade}/year/{year}' , 'web.client.school.certificate.certificate')->name('year');
    });


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

Route::group(['prefix' => 'testcenter', 'as' => 'testcenter.'], function () {

    Route::view('/' , 'web.client.testcenter.index');

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

Route::group(['prefix' => 'beltei_university', 'as' => 'beltei_university.'], function () {

    Route::view('/' , 'web.client.beltei_university.index');

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::view('/' , 'web.client.beltei_university.about.welcome')->name('welcome');
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


    
    
});

Route::group(['prefix' => 'beltei_tours_travel', 'as' => 'beltei_tours_travel.'], function () {

    Route::view('/' , 'web.client.beltei_tours_travel.index');

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
        Route::view('/khmer' , 'web.client.beltei_tours_travel.mainprogram.khmer')->name('khmer');
        Route::group(['prefix' => 'khmer', 'as' => 'khmer.'], function () {
            Route::view('/vision' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.vision')->name('vision');
            Route::view('/special-quality' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.special-quality')->name('special-quality');
            Route::view('/schedule' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.schedule')->name('schedule');
            Route::view('/admission' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.admission')->name('admission');
            Route::view('/awarding' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.awarding')->name('awarding');
            Route::view('/certificate' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.certificate')->name('certificate');
            Route::view('/prebeltei_tours_travel' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.prebeltei_tours_travel')->name('prebeltei_tours_travel');
            Route::view('/elementary' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.elementary')->name('elementary');
            Route::view('/junior' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.junior')->name('junior');
            Route::view('/highbeltei_tours_travel' , 'web.client.beltei_tours_travel.mainprogram.khmerdetail.highbeltei_tours_travel')->name('highbeltei_tours_travel');
        });

        Route::view('/ESL' , 'web.client.beltei_tours_travel.mainprogram.ESL')->name('ESL');
        Route::group(['prefix' => 'ESL', 'as' => 'ESL.'], function () {
            Route::view('/vision' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.vision')->name('vision');
            Route::view('/special-quality' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.special-quality')->name('special-quality');
            Route::view('/schedule' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.schedule')->name('schedule');
            Route::view('/admission' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.admission')->name('admission');
            Route::view('/awarding' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.awarding')->name('awarding');
            Route::view('/certificate' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.certificate')->name('certificate');
            Route::view('/prebeltei_tours_travel' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.prebeltei_tours_travel')->name('prebeltei_tours_travel');
            Route::view('/elementary' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.elementary')->name('elementary');
            Route::view('/junior' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.junior')->name('junior');
            Route::view('/highbeltei_tours_travel' , 'web.client.beltei_tours_travel.mainprogram.ESLdetail.highbeltei_tours_travel')->name('highbeltei_tours_travel');
        });

        Route::view('/CSL' , 'web.client.beltei_tours_travel.mainprogram.CSL')->name('CSL');
        Route::group(['prefix' => 'CSL', 'as' => 'CSL.'], function () {
            Route::view('/detail' , 'web.client.beltei_tours_travel.mainprogram.CSLdetail.CSLdetail')->name('detail');
            Route::view('/prebeltei_tours_travel' , 'web.client.beltei_tours_travel.mainprogram.CSLdetail.prebeltei_tours_travel')->name('prebeltei_tours_travel');
            Route::view('/young-learners' , 'web.client.beltei_tours_travel.mainprogram.CSLdetail.young-learners')->name('young-learners');
            Route::view('/adult-learners' , 'web.client.beltei_tours_travel.mainprogram.CSLdetail.adult-learners')->name('adult-learners');
            Route::view('/schedule' , 'web.client.beltei_tours_travel.mainprogram.CSLdetail.schedule')->name('schedule');
        });

        Route::view('/IMA' , 'web.client.beltei_tours_travel.mainprogram.IMA')->name('IMA');

        Route::view('/internation-preparation' , 'web.client.beltei_tours_travel.mainprogram.internation')->name('internation-preparation');
        Route::group(['prefix' => 'internation-preparation', 'as' => 'internation-preparation.'], function () {
            Route::view('/vision' , 'web.client.beltei_tours_travel.mainprogram.internationdetail.vision')->name('vision');
            Route::view('/TOEFL' , 'web.client.beltei_tours_travel.mainprogram.internationdetail.TOEFL')->name('TOEFL');
        });
    });

    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::view('/' , 'web.client.beltei_tours_travel.news.news');
    });


});

Route::group(['prefix' => 'relation', 'as' => 'relation.'], function () {

    Route::view('/' , 'web.client.relation.index');

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::view('/' , 'web.client.relation.about.welcome')->name('welcome');
        Route::view('purpose' , 'web.client.relation.about.purpose')->name('purpose');
        Route::view('vision' , 'web.client.relation.about.vision')->name('vision');
        Route::view('history' , 'web.client.relation.about.history')->name('history');
        Route::view('whybeltei' , 'web.client.relation.about.whyBeltei')->name('whybeltei');
    });
    Route::group(['prefix' => 'mainprogram', 'as' => 'mainprogram.'], function () {
        Route::view('/khmer' , 'web.client.relation.mainprogram.khmer')->name('khmer');
        Route::group(['prefix' => 'khmer', 'as' => 'khmer.'], function () {
            Route::view('/vision' , 'web.client.relation.mainprogram.khmerdetail.vision')->name('vision');
            Route::view('/special-quality' , 'web.client.relation.mainprogram.khmerdetail.special-quality')->name('special-quality');
            Route::view('/schedule' , 'web.client.relation.mainprogram.khmerdetail.schedule')->name('schedule');
            Route::view('/admission' , 'web.client.relation.mainprogram.khmerdetail.admission')->name('admission');
            Route::view('/awarding' , 'web.client.relation.mainprogram.khmerdetail.awarding')->name('awarding');
            Route::view('/certificate' , 'web.client.relation.mainprogram.khmerdetail.certificate')->name('certificate');
            Route::view('/preschool' , 'web.client.relation.mainprogram.khmerdetail.preschool')->name('preschool');
            Route::view('/elementary' , 'web.client.relation.mainprogram.khmerdetail.elementary')->name('elementary');
            Route::view('/junior' , 'web.client.relation.mainprogram.khmerdetail.junior')->name('junior');
            Route::view('/highschool' , 'web.client.relation.mainprogram.khmerdetail.highschool')->name('highschool');
        });

        Route::view('/ESL' , 'web.client.relation.mainprogram.ESL')->name('ESL');
        Route::group(['prefix' => 'ESL', 'as' => 'ESL.'], function () {
            Route::view('/vision' , 'web.client.relation.mainprogram.ESLdetail.vision')->name('vision');
            Route::view('/special-quality' , 'web.client.relation.mainprogram.ESLdetail.special-quality')->name('special-quality');
            Route::view('/schedule' , 'web.client.relation.mainprogram.ESLdetail.schedule')->name('schedule');
            Route::view('/admission' , 'web.client.relation.mainprogram.ESLdetail.admission')->name('admission');
            Route::view('/awarding' , 'web.client.relation.mainprogram.ESLdetail.awarding')->name('awarding');
            Route::view('/certificate' , 'web.client.relation.mainprogram.ESLdetail.certificate')->name('certificate');
            Route::view('/preschool' , 'web.client.relation.mainprogram.ESLdetail.preschool')->name('preschool');
            Route::view('/elementary' , 'web.client.relation.mainprogram.ESLdetail.elementary')->name('elementary');
            Route::view('/junior' , 'web.client.relation.mainprogram.ESLdetail.junior')->name('junior');
            Route::view('/highschool' , 'web.client.relation.mainprogram.ESLdetail.highschool')->name('highschool');
        });

        Route::view('/CSL' , 'web.client.relation.mainprogram.CSL')->name('CSL');
        Route::group(['prefix' => 'CSL', 'as' => 'CSL.'], function () {
            Route::view('/detail' , 'web.client.relation.mainprogram.CSLdetail.CSLdetail')->name('detail');
            Route::view('/preschool' , 'web.client.relation.mainprogram.CSLdetail.preschool')->name('preschool');
            Route::view('/young-learners' , 'web.client.relation.mainprogram.CSLdetail.young-learners')->name('young-learners');
            Route::view('/adult-learners' , 'web.client.relation.mainprogram.CSLdetail.adult-learners')->name('adult-learners');
            Route::view('/schedule' , 'web.client.relation.mainprogram.CSLdetail.schedule')->name('schedule');
        });

        Route::view('/IMA' , 'web.client.relation.mainprogram.IMA')->name('IMA');

        Route::view('/internation-preparation' , 'web.client.relation.mainprogram.internation')->name('internation-preparation');
        Route::group(['prefix' => 'internation-preparation', 'as' => 'internation-preparation.'], function () {
            Route::view('/vision' , 'web.client.relation.mainprogram.internationdetail.vision')->name('vision');
            Route::view('/TOEFL' , 'web.client.relation.mainprogram.internationdetail.TOEFL')->name('TOEFL');
        });
    });
    Route::group(['prefix' => 'recognition', 'as' => 'recognition.'], function () {
        Route::view('/' , 'web.client.relation.recognition.recognition');
        Route::view('/recognitiondetail' , 'web.client.relation.recognition.recognitiondetail.recognitiondetail')->name('recognitiondetail');
    });
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::view('/' , 'web.client.relation.news.news');
    });
    Route::group(['prefix' => 'campus', 'as' => 'campus.'], function () {
        Route::view('/campusTemplete' , 'web.client.relation.campus.campusTemplete')->name('campusTemplete');
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


        Route::resource('certificate',CertificateController::class)->names('certificate');
        Route::prefix('certificate')->as('certificate')->group(function () {
            Route::post('/store/file', [CertificateController::class, 'uploadLargeFiles'])->name('.files.upload.large');
            Route::post('/your-route', [CertificateController::class, 'processData'])->name('.excel.upload');
        });
        
        
        // Route::resource('grade-A' , GradeAController::class)->names('grade-A');
        Route::resource('grade-A',GradeAController::class)->names('grade-A');
        Route::prefix('grade-A')->as('grade-A')->group(function () {
            Route::post('/store/file', [GradeAController::class, 'uploadLargeFiles'])->name('.files.upload.large');
            Route::post('/your-route', [GradeAController::class, 'processData'])->name('.excel.upload');
        });


    });

    // School Management
    Route::prefix('university')->as('university.')->middleware('can:access-university-page')->group(function () {


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


    });
});
