<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!|
*/
// Front Pages Controller
Route::get('/', 'Front\FrontController@index')->name('front');
Route::get('/affiliate/login', 'Front\FrontController@login')->name('front.login');
Route::get('/affiliate/register', 'Front\FrontController@register')->name('front.register');
Route::get('affiliate/about', 'Front\FrontController@about')->name('about');
Route::get('affiliate/contact_us', 'Front\FrontController@contact')->name('contact');
Route::get('affiliate/modal','Front\FrontController@modal')->name('modal');
Route::get('affiliate/sendEmail','Front\FrontController@sendEmail')->name('modal');
// End front pages controller
// Route::get('/', function () {
// return view('welcome');
// });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/affiliate/dashboard', 'dashboard\a\DashboardController@dashboard')->name('dashboard');
Route::get('/affiliate/starter', 'dashboard\a\DashboardController@starter')->name('starter');
Route::get('/affiliate/topbar', 'dashboard\a\DashboardController@topbar')->name('topbar');
Route::get('/affiliate/leftbar', 'dashboard\a\DashboardController@leftbar')->name('leftbar');
//  Pages Route
Route::get('/affiliate/payclick', 'dashboard\a\DashboardController@payclick')->name('payclick');
Route::get('/affiliate/activation', 'dashboard\a\PagesController@activation')->name('activation');
Route::get('/affiliate/clicked_list', 'dashboard\a\PagesController@clicked_list')->name('clicked_list');
Route::get('/affiliate/educational_courses', 'dashboard\a\PagesController@education_packages')->name('education_packages');
Route::get('/affiliate/team_structure', 'dashboard\a\PagesController@team_structure')->name('team_structure');
Route::get('/affiliate/view_point', 'dashboard\a\PagesController@view_point')->name('view_point');
Route::get('/affiliate/account', 'dashboard\a\PagesController@account')->name('account');
Route::get('/affiliate/payments', 'dashboard\a\PagesController@payments')->name('payments');
Route::get('/affiliate/payments', 'dashboard\a\PagesController@payments')->name('payments');
Route::get('/affiliate/adclick/adclick_page', 'dashboard\a\PagesController@adclick_page')->name('adclick_page');
Route::get('/affiliate/adclick/advertisment', 'dashboard\a\PagesController@advertisment')->name('advertisment');
// Team Building pages
Route::get('/affiliate/team_building/my_awards', 'dashboard\a\PagesController@my_awards')->name('my_awards');
Route::get('/affiliate/team_building/commissions', 'dashboard\a\PagesController@commissions')->name('commissions');
Route::get('/affiliate/team_building/view_points', 'dashboard\a\PagesController@view_points')->name('view_points');
Route::get('/affiliate/team_building/ranking', 'dashboard\a\PagesController@ranking')->name('ranking');
    //  Balance pages
Route::get('/affiliate/balance/cash_account', 'dashboard\a\PagesController@balance')->name('balance');
Route::get('/affiliate/balance/coin_account', 'dashboard\a\PagesController@coin_account')->name('coin_account');
Route::get('/affiliate/balance/trading_account', 'dashboard\a\PagesController@trading_account')->name('trading_account');
Route::get('/affiliate/balance/my_invoice', 'dashboard\a\PagesController@my_invoice')->name('my_invoice');
Route::get('/affiliate/faq/general', 'dashboard\a\PagesController@faq')->name('faq');
Route::get('/affiliate/faq/chat_questions', 'dashboard\a\PagesController@chat_questions')->name('chat_questions');
Route::get('/affiliate/faq/package_question', 'dashboard\a\PagesController@package_question')->name('package_question');
Route::get('/affiliate/faq/payclick_question', 'dashboard\a\PagesController@payclick_question')->name('payclick_question');
Route::get('/affiliate/faq/referral_question', 'dashboard\a\PagesController@referral_question')->name('referral_question');
Route::get('/affiliate/refer_earn', 'dashboard\a\PagesController@refer_earn')->name('refer_earn');
Route::get('/affiliate/marchants', 'dashboard\a\PagesController@marchants')->name('marchants');
        //   Package pages
Route::get('/affiliate/package/packages_list', 'dashboard\a\PagesController@packages_list')->name('packages_list');
Route::get('/affiliate/package/purchased_packages', 'dashboard\a\PagesController@purchased_packages')->name('purchased_packages');
Route::get('/affiliate/exchange', 'dashboard\a\PagesController@exchange')->name('exchange');
Route::get('/affiliate/product', 'dashboard\a\PagesController@product')->name('product');

Route::get('/affiliate/exchange/open_orders', 'dashboard\a\PagesController@open_orders')->name('open_orders');
Route::get('/affiliate/exchange/transaction_history', 'dashboard\a\PagesController@transaction_history')->name('transaction_history');
Route::get('/affiliate/products/other_products', 'dashboard\a\PagesController@other_products')->name('other_products');
        //   EDUCATION PAGES
Route::get('/affiliate/education/pdf', 'dashboard\a\PagesController@education_pdf')->name('education_pdf');
Route::get('/affiliate/education/tutorial', 'dashboard\a\PagesController@education_tutorial')->name('education_tutorial');






