<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        return view('front.home');
    }

    public function about(Request $request){
        return view('front.about');
    }
    
    public function donate(Request $request){
        return view('front.donate');
    }
    
    public function news(Request $request){
        return view('front.news');
    }
    
    public function contact(Request $request){
        return view('front.contact');
    }
    
    public function mission(Request $request){
        return view('front.mission');
    }
}
