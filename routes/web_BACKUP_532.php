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

Route::get('/admin/myProfile', function () {
    return view('admin.myProfile');
});

Route::get('/admin/editProfile', function () {
    return view('admin.editProfile');
});

Route::get('/admin/addCreator', function () {
    return view('admin.addCreator');
});

Route::get('/admin/viewCreator', function () {
    return view('admin.viewCreator');
});

Route::get('/admin/addCollector', function () {
    return view('admin.addCollector');
});

Route::get('/admin/viewCollector', function () {
    return view('admin.viewCollector');
});

Route::get('/admin/terms', function () {
    return view('admin.terms');
});

Route::get('/admin/adminPanel', function () {
    return view('admin.adminPanel');
});





Route::get('creator/collection', function () {
    return view('creator.collection');
});


Route::get('creator/creation', function () {
    return view('creator.creation');
});

Route::get('creator/settings', function () {
    return view('creator.profile_settings');
});


Route::get('creator/transactions', function () {
    return view('creator.transactions');
});


Route::get('creator/bids', function () {
    return view('creator.bid');
});


Route::get('creator/proof_auth', function () {
    return view('creator.proof_auth');
});

Route::get('creator/details', function () {
    return view('creator.details');
});
