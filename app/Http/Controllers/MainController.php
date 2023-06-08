<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('main.main');
    }

    public function about()
    {
        return view('main.about');
    }
    public function service(){
        return view('main.service');
    }
    public function project(){
        return view('main.project');
    }
    public function blog(){
        return view('main.blog');
    }
    public function single(){
        return view('main.single');
    }
    public function contact(){
        return view('main.contact');
    }
}
