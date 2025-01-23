<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.pages.index');
    }
    public function about(){
        return view('home.pages.about');
    }
    public function career(){
        return view('home.pages.career');
    }
    public function committee(){
        return view('home.pages.committee');
    }
    public function contact(){
        return view('home.pages.contact');
    }
    public function directory(){
        return view('home.pages.directory');
    }
    public function event(){
        return view('home.pages.event');
    }
    public function register(){
        return view('home.pages.register');
    }
    public function typography(){
        return view('home.pages.typography');
    }
}
