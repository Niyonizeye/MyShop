<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    // modal for payment

    public function modal(){
        return view('front.modal');
    }

    public function sendEmail(){
        $details = [
            'title' => 'Email From Jean Paul',
            'body' => 'Be sorry for  this am testing the send email at all dont wory'
        ];
        Mail::to("aimeanathole@gmail.com","niyoeanpaul@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }

}
