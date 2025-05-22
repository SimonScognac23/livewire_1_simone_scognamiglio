<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


// Rotta iniziale che restituisce la vista 'welcome'
Route::get('/', function () {
    return view('welcome');
})->name('home.page');


//Article Controller

// CREATE rotta get che mi mostra il form per inserire il nuovo articolo
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

//Index
Route::get('articles/Index', [ArticleController::class, 'index'])->name('articles.index');

//SHOW
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');


//EDIT
Route::get('/articles/edit/{article}', [ArticleController::class, 'edit'])->name('articles.edit');






// SSSSS   IIIII  M   M   OOO   N   N  EEEEE
// S         I    MM MM  O   O  NN  N  E    
// SSSSS     I    M M M  O   O  N N N  EEEE 
//     S     I    M   M  O   O  N  NN  E    
// SSSSS   IIIII  M   M   OOO   N   N  EEEEE




