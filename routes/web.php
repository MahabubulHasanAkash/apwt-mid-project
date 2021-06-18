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

Route::get('/crator/home', function () {
    return view('creator.home');
});

Route::get('/collection', function () {
    return view('creator.collection');
});


Route::get('/creation', function () {
    return view('creator.creation');
});

Route::get('/collector', function () {
    return view('Collector.details');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dash');
});


Route::get('login', function () {
    return view('seller.login');
});


Route::get('seller/home', function () {
    return view('seller.home');
});

Route::get('registration', function () {
    return view('seller.registration');
});






/*Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login']);
Route::get('registration', [RegistrationController::class, 'index']);
Route::get('logout', [RegistrationController::class, 'logout']);
Route::post('registration', [RegistrationController::class, 'store']);
Route::get('creative-list', [CreativeListController::class, 'index']);
Route::get('create-creative', [CreativeListController::class, 'create']);
*/