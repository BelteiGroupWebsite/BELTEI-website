<?php

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
        });
    });

    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::view('/' , 'web.client.school.news.news');
    });

    Route::group(['prefix' => 'campus', 'as' => 'campus.'], function () {
        Route::view('/campusTemplete' , 'web.client.school.campus.campusTemplete')->name('campusTemplete');
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
        Route::view('/bacll-batch18' , 'web.client.testcenter.news.bacll-batch18')->name('bacll-batch18');
    });
    Route::group(['prefix' => 'campus', 'as' => 'campus.'], function () {
        Route::view('/campusTemplete' , 'web.client.testcenter.campus.campusTemplete')->name('campusTemplete');
    });

});

