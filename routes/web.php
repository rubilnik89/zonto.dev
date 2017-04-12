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

Route::get('invest', 'InvestController@invest')->name('invest');
Route::get('myShares', 'InvestController@myShares')->name('myShares');
Route::get('partnersStructure', 'InvestController@partnersStructure')->name('partnersStructure');
Route::get('balance', 'InvestController@balance')->name('balance');
Route::get('payment', 'InvestController@payment')->name('payment');
Route::get('outPayment', 'InvestController@outPayment')->name('outPayment');
Route::get('inPayment', 'InvestController@inPayment')->name('inPayment');
Route::get('history', 'InvestController@history')->name('history');
Route::get('profile', 'InvestController@profile')->name('profile');
Route::get('faq', 'InvestController@faq')->name('faq');
Route::get('rules', 'InvestController@rules')->name('rules');
