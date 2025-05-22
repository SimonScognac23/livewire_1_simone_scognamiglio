<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;




class TableArticle extends Component
{

    public function destroy(Article $article){
      $article->delete();
    }
    public function render()
    {
        $articles = Article::all();  // faccio una chiamata tramite il modello article e rendo disponibile con la compact i miei articoli
        return view('livewire.table-article' , compact('articles'));
        //cosi avro portato tutto dentro il componente
    }
}
