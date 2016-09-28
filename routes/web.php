<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layouts/template');
});

Route::get('/page1', function () {
    return view('layouts.template');
});
Route::get('/employer',function (){
    return view('layouts.employer');
});
Route::get('/employer_dt',function (){
    return view('layouts.employer_detail');
});
Route::get('/show_all_pt',function (){
    return view('layouts.show_all_pt');
});


Route::resource('editPh', 'NoomController');
Route::resource('manageProfile', 'NoomController@manageProfile');
Route::resource('addPortfolio', 'NoomController@addPortfolio');
Route::resource('editPortfolio', 'NoomController@editPortfolio');
Route::resource('managePortfolio', 'NoomController@managePortfolio');

Route::get('/ability', function () {
    return view('lin.ability');
});
Route::get('/detail_employer', function () {
    return view('lin.detail_employer');
});
Route::get('/post', function () {
    return view('lin.post_employer');
});
Route::get('/editprofile', function () {
    return view('lin.edit_profileEmployer');
});
Route::get('/employer_pro', function () {
    return view('lin.profileEmployer');
});
Route::get('/editpostemployer', function () {
    return view('lin.editpost_employer');
});