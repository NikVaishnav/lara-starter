<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcome extends Controller
{
    //
    public function index($users){
        
        return view('about',['name'=> $users]);
    }
}
