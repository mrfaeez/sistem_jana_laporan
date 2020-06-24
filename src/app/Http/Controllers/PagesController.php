<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function view(){
        return view('data.view');
    }

    public function update(){
        return view('data.update');
    }
}
