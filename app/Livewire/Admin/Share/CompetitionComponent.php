<?php

namespace App\Livewire\Admin\Share;

use App\Models\Branch;
use App\Models\Share\Competition;
use App\Models\Share\CompetitionBatch;
use App\Models\Share\CompetitionGrade;
use App\Models\Share\CompetitionVideo;
use App\Models\Share\Translate;
use Livewire\Component;

class CompetitionComponent extends Component
{
    public $languages;
    public $branches, $competitions = [], $grades = [];

    public $branch_id = null;
    public $competition_id = null;

    public $branchInput, $competitionInput,  $gradeInput, $batchInput, $yearInput;

    public $batches;
    public $competitionInputs = [];
    public $gradeInputs = [];
    public $embedInputs = [];

    public $competitionBatches = [];

    public function mount()
    {
        $this->branches = Branch::all();
        $this->languages = \App\Models\Language::all();
        $this->batches = \App\Models\Share\CompetitionBatch::all();
        // $this->competitions = Competition::all();
        // dd(CompetitionVideo::get());
    }

    public function render()
    {
        return view('livewire.admin.share.competition-component');
    }

    public function updatedBranchInput($branch)
    {
        $this->branch_id = $branch;
        $this->loadCompetitions();
    }
    public function loadGrades()
    {
        $this->grades = CompetitionGrade::with('translate')->where('competition_id', $this->competition_id)->get();
    }

    public function updatedCompetitionInput($competition)
    {
        $this->competition_id = $competition;
        $this->loadGrades();
    }
    public function loadCompetitions()
    {
        $this->competitions = Competition::with('translate')->where('branch_id', $this->branch_id)->get();
        // dd(Translate::get());
    }

    public function updatedGradeInput($grade)
    {
        $this->competitionBatches = CompetitionBatch::with('videos', 'grade.translate')->where('grade_id', $grade)->with('videos')->orderByDesc('batch')->get();
    }


    public function createOrUpdateCompetitionVideo()
    {

        // for($i = 1 ; $i <= 3; $i++){
        //     CompetitionVideo::create([
        //         'batch_id' => $this->competition_id,
        //         'rank' => $i,
        //         'embed' => $this->embedInputs[$i],
        //     ]);
        // }

        $CompetitionBatch = CompetitionBatch::create([
            'grade_id' => $this->gradeInput,
            'batch' => $this->batchInput,
            'year' => $this->yearInput,
        ]);
        foreach ($this->embedInputs as $key => $embedInput) {
            // Translate::create([
            //     'table_name' => 'competition_videos',
            //     'content_id' => $this->competition_id,
            //     'language_id' => $languageId,
            //     'content_type' => 'title',
            //     'translate' => $name,
            // ]);
            CompetitionVideo::create([
                'batch_id' => $CompetitionBatch->id,
                'rank' => $key,
                'embed' => $embedInput,
            ]);
        }
        session()->flash('message', 'Competition created successfully!');
    }

    public function storeCompetition()
    {
        $this->validate([
            'branchInput' => 'required',
            // 'competitionInput' => 'required',
        ]);

        $competition = Competition::create([
            'branch_id' => $this->branchInput,
        ]);


        foreach ($this->competitionInputs as $languageId => $name) {
            Translate::create([
                'table_name' => 'competitions',
                'content_id' => $competition->id,
                'language_id' => $languageId,
                'content_type' => 'title',
                'translate' => $name,
            ]);
        }

        $this->reset('competitionInput');
        session()->flash('message', 'Competition created successfully!');
        // $this->dispatchBrowserEvent('success', ['message' => 'Competition created successfully']);
    }

    public function storeGrade()
    {
        $this->validate([
            'competitionInput' => 'required',
        ]);
        $grade = CompetitionGrade::create([
            'competition_id' => $this->competitionInput,
        ]);


        foreach ($this->gradeInputs as $languageId => $name) {
            Translate::create([
                'table_name' => 'grades',
                'content_id' => $grade->id,
                'language_id' => $languageId,
                'content_type' => 'title',
                'translate' => $name,
            ]);
        }
        $this->reset('competitionInput');
        session()->flash('message', 'Grade created successfully!');
        // $this->dispatchBrowserEvent('success', ['message' => 'Competition created successfully']);

    }


    public function updateCompetitionOrder($orderedIds)
    {
        // foreach ($orderedIds as $index => $id) {
        //     UtbPoster::where('id', $id['value'])->update(['order_column' => $index + 1]);
        // }
        // $this->loadPosters();
    }
    public function updateGradeOrder($orderedIds)
    {
        // foreach ($orderedIds as $index => $id) {
        //     UtbPoster::where('id', $id['value'])->update(['order_column' => $index + 1]);
        // }
        // $this->loadPosters();
    }
}
