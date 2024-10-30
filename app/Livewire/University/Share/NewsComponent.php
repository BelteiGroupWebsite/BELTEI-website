<?php

namespace App\Livewire\University\Share;

use App\Models\University\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $biu_news = News::where('category', 3)->orderBy('date', 'desc')->paginate(10);
        
        return view('livewire.university.share.news-component' , compact('biu_news'));
    }
}
