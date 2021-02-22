<?php

namespace App\Http\Controllers\dashboard\a;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard.a.dashboard');
    }

    // End of dashboard function
    public function starter(){
        return view('dashboard.a.starter');
    }
    // end of starter function

    public function topbar(){
        return view('dashboard.a.includes.topbar');
    }
    // end of topbar function
    public function leftbar(){
        return view('dashboard.a.includes.leftbar');
    }
     // end of topbar function
     public function payclick(){
        return view('dashboard.a.pages.payclick');
    }
}
