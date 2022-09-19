<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Search extends Component
{
    public $search = 'Lorem';

    public function render()
    {
        print_r($this->search);
        $found_articles = Article::where('name', 'LIKE', '%'.$this->search.'%')
            ->orWhere('content', 'LIKE', '%'.$this->search.'%')->get();
        $search = $this->search;
        return view('livewire.search',compact('found_articles','search'));
    }
}
