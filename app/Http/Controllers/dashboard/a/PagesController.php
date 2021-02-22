<?php

namespace App\Http\Controllers\dashboard\a;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function activation(){
        return view('dashboard.a.pages.activation_package');
    }
    // end of  function
    public function balance(){
        return view('dashboard.a.pages.balance');
    }
    // end of  function
    public function clicked_list(){
        return view('dashboard.a.pages.clicked_list');
    }
    // end of  function
    public function education_packages(){
        return view('dashboard.a.pages.education_packages');
    }
    // end of  function
    public function team_structure(){
        return view('dashboard.a.pages.team_structure');
    }
    // end of  function 
    public function view_point(){
        return view('dashboard.a.pages.view_point');
    }
    public function account(){
        return view('dashboard.a.pages.account');
    }
    // end of  function 
    public function payments(){
        return view('dashboard.a.pages.payments');
    }
    // end of  function 
    public function adclick_page(){
        return view('dashboard.a.pages.adclick_page');
    }
    // end of  function 
    public function advertisment(){
        return view('dashboard.a.pages.advertisment');
    }
    // end of  function 
    public function my_awards(){
        return view('dashboard.a.pages.my_awards');
    }
    // end of  function 
    public function commissions(){
        return view('dashboard.a.pages.commissions');
    }
    // end of  function 
    public function view_points(){
        return view('dashboard.a.pages.view_points');
    }
    // end of  function 
    public function ranking(){
        return view('dashboard.a.pages.ranking');
    }
    // end of  function 
    public function coin_account(){
        return view('dashboard.a.pages.coin_account');
    }
    // end of  function 
    public function trading_account(){
        return view('dashboard.a.pages.trading_account');
    }
    // end of  function 
    public function my_invoice(){
        return view('dashboard.a.pages.my_invoice');
    }
    // end of  function 
    public function faq(){
        return view('dashboard.a.pages.faq');
    }
    // end of  function 
    public function chat_questions(){
        return view('dashboard.a.pages.chat_questions');
    }
    // end of  function 
    public function package_question(){
        return view('dashboard.a.pages.package_question');
    }
    // end of  function 
    public function payclick_question(){
        return view('dashboard.a.pages.payclick_question');
    }
    // end of  function 
    public function referral_question(){
        return view('dashboard.a.pages.referral_question');
    }
    // end of  function 
    public function refer_earn(){
        return view('dashboard.a.pages.refer_earn');
    }
    // end of  function 
    public function marchants(){
        return view('dashboard.a.pages.marchants');
    }
    // end of  function 
    public function packages_list(){
        return view('dashboard.a.pages.packages_list');
    }
    // end of  function 
    public function purchased_packages(){
        return view('dashboard.a.pages.purchased_packages');
    }
    // end of  function 
    public function exchange(){
        return view('dashboard.a.pages.exchange');
    }
    // end of  function 
    public function product(){
        return view('dashboard.a.pages.product');
    }
    // end of  function 
    public function open_orders(){
        return view('dashboard.a.pages.open_orders');
    }
    // end of  function 
    public function transaction_history(){
        return view('dashboard.a.pages.transaction_history');
    }
    // end of  function 
    public function other_products(){
        return view('dashboard.a.pages.other_products');
    }
    // end of  function 
    public function education_pdf(){
        return view('dashboard.a.pages.education_pdf');
    }
    // end of  function 
    public function education_tutorial(){
        return view('dashboard.a.pages.education_tutorial');
    }
    // end of  function 
    
}
