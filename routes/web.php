<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'auth@index');
Route::post('/login', 'auth@verifylogin');
Route::get('/logout', 'auth@logout');
Route::get('/creator/signup', 'signupController@creator_index');
Route::post('/creator/signup', 'signupController@creator_signup');
Route::get('/collector/signup', 'signupController@collector_index');
Route::post('/collector/signup', 'signupController@collector_signup');

Route::group(['middleware' => ['session']], function () {
    Route::group(['middleware' => ['admin']], function () {
        //write admin routes here
        



    });
    Route::group(['middleware' => ['collector']], function () {
        //write collector routes here



    });
    Route::group(['middleware' => ['creator']], function () {
        //write creator routes here
        Route::get('/creator/home', 'creatorHome@index');
    });
    Route::group(['middleware' => ['manager']], function () {
        //write manager routes here
    });
});
