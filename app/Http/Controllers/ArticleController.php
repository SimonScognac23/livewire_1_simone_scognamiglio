<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //

    public function create()
    {
        return view('articles.create');
    }

    public function index()
    {
        // $articles = Article::all();  
        // Questa operazione di recuperare tutti gli articoli la trasferiamo all'interno del componente back-end della classe TableArticle

        return view('articles.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    // Tutte le operazioni logiche che facevamo con il CRUD classico ora sono a carico del componente con Livewire
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }
}
