<?php

namespace App\Http\Controllers\Client\Share;

use App\Http\Controllers\Controller;
use App\Models\Share\Competition;
use App\Models\Share\CompetitionBatch;
use App\Models\Share\CompetitionGrade;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    //
    public function show($grade)
    {
        // $grade = CompetitionGrade::where('id', $grade)->firstOrFail();
        $competitionBatches = CompetitionBatch::with('videos', 'grade.translate')->where('grade_id', $grade)->with('videos')->orderByDesc('batch')->get();
        // dd($competitionBatches);
        $latestBatch = $competitionBatches->sortByDesc('year')->sortByDesc('batch')->first();
        $firstPlaceVideo = $latestBatch?->videos->firstWhere('rank', 1);

        $competition = CompetitionGrade::where('id', $grade)->first()->competition;


        // return view('web.client.school.public-speaking', [
        //     'competitionBatches' => $competitionBatches,
        //     'firstPlaceVideo' => $firstPlaceVideo,
        // ]);


        return view('web.client.school.competition.competition', compact('competitionBatches', 'firstPlaceVideo' , 'competition'));
        // return view('web.client.school.public-speaking.public-speaking', compact('competitionBatches' , 'firstPlaceVideo'));
    }
}
