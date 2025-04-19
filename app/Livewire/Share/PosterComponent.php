<?php

namespace App\Livewire\Share;

use Livewire\Component;

class PosterComponent extends Component
{
    public $poster_id;
    
    public $posters;

    public function mount($poster_id){
        $this->posters = \App\Models\University\Poster\UtbPoster::where('branch', operator: $poster_id)->get();
    }
    public function render()
    {
        return view('livewire.share.poster-component', [
            'posters' => $this->posters,
        ]);
    }
}
