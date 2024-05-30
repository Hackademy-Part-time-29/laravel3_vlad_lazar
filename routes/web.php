<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomepageCont;
use App\Http\Controllers\DettagliCont;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/homepage',[HomepageCont::class,'homepage'])->name('homepage');
Route::get('/dettagli',[DettagliCont::class,'dettagli'])->name('dettagli');
Route::get('/articoli',[ArticleController::class,'index'])->name('articoli');



Route::get('/articolo/id={id}',[ArticleController::class,'show'])->name('articolo');