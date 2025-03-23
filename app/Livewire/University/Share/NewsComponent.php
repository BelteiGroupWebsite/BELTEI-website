<?php

namespace App\Livewire\University\Share;

use App\Models\University\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsComponent extends Component
{
    use WithPagination;

    public $category; // Define the category property

    public function mount($category)
    {
        $this->category = $category; // Assign the passed category
    }

    public function render()
    {
        // Use the passed category in the query
        $Allnews = News::where('category', $this->category)
                        ->orderBy('date', 'desc')
                        ->paginate(10);
        
        return view('livewire.university.share.news-component', compact('Allnews'));
    }
}
