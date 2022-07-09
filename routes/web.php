<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('register');
});

Route::get('/preferiti', function () {
    return view('preferiti');
});

Route::get('/change-password', function () {
    return view('change-password');
});


Route::get('/signup', "App\Http\Controllers\RegisterController@showSignup");
Route::post('/register', "App\Http\Controllers\RegisterController@register");

Route::get('/register/username/{username}', "App\Http\Controllers\RegisterController@controllaUsername");
Route::get('/register/email/{email}', "App\Http\Controllers\RegisterController@controllaEmail");

Route::get('/login', "App\Http\Controllers\LoginController@login")->name("login");
Route::get('/logout', "App\Http\Controllers\LoginController@logout")->name("logout");
Route::post('/login', "App\Http\Controllers\LoginController@checkLogin");

Route::get('/home', "App\Http\Controllers\HomeController@index");

Route::get('/home/id/{id}', "App\Http\Controllers\HomeController@ispref");
Route::post('/addPreferiti', "App\Http\Controllers\HomeController@addPref");
Route::get('/home/{book}', "App\Http\Controllers\Homecontroller@Book");

Route::get('/profilo', "App\Http\Controllers\AreaController@index");

Route::get('/pref', "App\Http\Controllers\PrefController@pre");
Route::post('/remove_pref', "App\Http\Controllers\PrefController@rem_pre");

route::post('/change', "App\Http\Controllers\change_pController@change");
