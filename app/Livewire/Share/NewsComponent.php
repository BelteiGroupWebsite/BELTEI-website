<?php

namespace App\Livewire\Share;

use App\Models\University\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsComponent extends Component
{
    use WithPagination;

    public $category;

    public function mount($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $Allnews = News::with('newsDetail')->where('category', $this->category)
                        ->select('id', 'image', 'date')
                       ->orderBy('date', 'desc')
                       ->paginate(10);

        return view('livewire.share.news-component', compact('Allnews'));
    }
}
