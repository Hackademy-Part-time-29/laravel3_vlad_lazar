<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public $articles=[
        1=>['id'=>1,'title'=>'Articolo 1','body'=>'lorem ipsum'],
        2=>['id'=>2,'title'=>'Articolo 2','body'=>'lorem ipsum'],
        3=>['id'=>3,'title'=>'Articolo 3','body'=>'lorem ipsum'],
        4=>['id'=>4,'title'=>'Articolo 4','body'=>'lorem ipsum'],

    ];
    public function index(){
        $articles=$this->articles;
        return view('articoli',compact('articles'));
    }

    public function show($id){
        if(array_key_exists($id,$this->articles)){
            $article=$this->articles[$id];
            return view('articolo',compact('article'));
        }else{
            abort(404);
        }
    }
}
