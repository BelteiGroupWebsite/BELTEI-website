<?php

namespace App\Livewire\School\Share;

use App\Models\University\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $bis_news = News::where('category', 2)->orderBy('date', 'desc')->paginate(10);
        return view('livewire.school.share.news-component', compact('bis_news'));
    }
}
