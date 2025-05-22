<?php

namespace App\Livewire;

use Livewire\Component;

class CardArticle extends Component
{

    public $article;
    
    public function render()
    {
        return view('livewire.card-article');
    }
}
