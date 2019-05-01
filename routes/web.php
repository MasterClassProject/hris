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


Route::get('/', function () { // root if the user is login
    if (Auth::guest()){
    return view('auth.login');
    }
    else{
    //return view('/');
    Route::get('/', 'DashboardController@index');    
    }

});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
