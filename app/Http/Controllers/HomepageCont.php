<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageCont extends Controller
{
    //
    public function homepage(){
        return view('homepage');
    }   
}