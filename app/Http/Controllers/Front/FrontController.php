<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // HOME PAGE
    public function index()
    {
        return view('front.front');
    }

    // LOGIN PAGE
    public function login(){
        return view('front.login');
    }

    // REGISTER
    public function register(){
        return view('front.register');
    }
    // CONTACT
    public function contact(){
        return view('front.contact');
    }

    // ABOUT
    public function about(){
        return view('front.about');
    }
}
