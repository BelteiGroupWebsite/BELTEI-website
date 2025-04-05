<?php

namespace App\Livewire\University\Poster;

use App\Models\Branch;
use App\Models\University\Poster\UtbPoster;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $posters, $branches;
    public $poster_id, $poster_image;
    public $branch=1; // Fixed syntax error
    protected $listeners = ['posterDelete' => 'deletePoster'];
    public function mount()
    {
        $this->branches = Branch::get();
        $this->loadPosters();
    }

    public function render()
    {
        return view('livewire.university.poster.index');
    }

    public function updatedBranch($branch)
    {
        $this->branch = $branch;
        $this->loadPosters();
    }
    public function createOrUpdatePoster()
    {
        if ($this->poster_id) {
            $this->updatePoster();
        } else {
            $this->createPoster();
        }
        $this->loadPosters();
    }

    public function updatePoster()
    {
        $poster = UtbPoster::find($this->poster_id);

        $updateData = [
            'utb_country_id' => $this->country_id,
            'link' => $this->collaboration_website,
        ];

        if ($this->poster_image) {
            $updateData['logo'] = $this->storeFile($this->poster_image, 'logos');
        }

        $poster->update($updateData);

        session()->flash('message', 'Collaborator updated successfully!');
    }

    public function createPoster()
    {
        $this->validate($this->ValidationRules());

        UtbPoster::create([
            'branch' => $this->branch,
            'image' => $this->storeFile($this->poster_image, 'posters'),
        ]);

        session()->flash('message', 'Poster saved successfully!');
    }

    public function updatePosterOrder($orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            UtbPoster::where('id', $id['value'])->update(['order_column' => $index + 1]);
        }
        $this->loadPosters();
    }

    private function ValidationRules($isUpdate = false)
    {
        $rules = [];

        if (!$isUpdate) {
            $rules['poster_image'] = 'image|mimes:jpeg,png,jpg|max:1024'; // Validate each image
        }

        return $rules;
    }
    private function storeFile($file, $folder)
    {
        return $file->store("university/posters/{$folder}", 'public');
    }
    public function deleteposter()
    {
        $poster = UtbPoster::find($this->poster_id);
        $poster->delete();
        $this->reset('poster_id');
        session()->flash('message', 'poster deleted successfully!');
        $this->loadPosters();
    }
    public function deletePosterID($poster_id)
    {
        $this->poster_id = $poster_id;
    }

    private function loadPosters()
    {
        $this->posters = UtbPoster::where('branch', $this->branch)->get();
    }
}
