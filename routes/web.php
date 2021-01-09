<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');




Route::group(['middleware' => 'auth'], function () {

    Route::get('/deposite_model/{id}', 'frontend\DepositsController@cal_deposite_model');


    Route::get('/dashboard', 'frontend\DashboardController@index')->name('frontend.dashboard.index');

    Route::get('/new_deposit', 'frontend\DepositsController@new_deposit')->name('frontend.deposits.new_deposit');
    Route::post('/new_deposit', 'frontend\DepositsController@confirm_new_deposit')->name('frontend.confirm.new_deposit');


    Route::get('/tickets', 'frontend\SupportSectionController@index')->name('frontend.tickets.index');
    Route::get('/tickets/create', 'frontend\SupportSectionController@create')->name('frontend.tickets.create');
    Route::post('/tickets', 'frontend\SupportSectionController@store')->name('frontend.tickets.store');
    Route::get('/tickets/{id}', 'frontend\SupportSectionController@show')->name('frontend.tickets.show');

    Route::get('/banners','frontend\BannersController@index')->name('frontend.banners.index');


});


Route::view('/', 'frontend.main-pages.home');
Route::view('/about', 'frontend.main-pages.about');
Route::view('/faq', 'frontend.main-pages.faq');
Route::view('/terms', 'frontend.main-pages.terms');
Route::view('/investment', 'frontend.main-pages.investment');
Route::view('/contact', 'frontend.main-pages.contact');
Route::view('/affiliate', 'frontend.main-pages.affiliate');
// Route::view('/affiliate', 'frontend.main-pages.home');
// Route::view('/affiliate', 'frontend.main-pages.home');


//perfect money url
Route::post('/perfectmoney/cancel',function(){
    return "cansel payment";
});

Route::post('/perfectmoney/success',function(){
    return "payemt success";
});

Route::post('/perfectmoney/status','frontend\PerfecrMoneyController@status');
