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
Route::get('/explore', 'creatorHome@index');
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
        Route::get('/home/{id}', 'nftController@index');
        Route::get('/creator/profile', 'creatorController@index');
        Route::get('/creator/profile/{userid}', 'creatorController@index');
        Route::get('/creator/profile/settings/{userid}', 'creatorController@edit');
        Route::post('/creator/profile/settings/{userid}', 'creatorController@update');
        Route::get('/creator/{id}/creation/send', 'creationController@sendindex');
        Route::post('/creator/{id}/creation/send', 'creationController@storeCreation');
        Route::post('/creator/{id}/creation/add', 'creationController@sellCreation');
        Route::get('/creator/{id}/creation/add', 'creationController@addindex');
        Route::get('/creator/account/{id}', 'accountController@index');
        Route::post('/creator/search', 'creatorHome@search');

        Route::get('/creator/sell/{id}', 'storeController@onsell');
        Route::get('/creator/sell/{id}/edit', 'storeController@editsell');
        Route::post('/creator/sell/{id}/edit', 'storeController@updatsell');
        Route::get('/creator/sell/{id}/delete', 'storeController@deletesell');

        Route::get('/creator/auction/{id}', 'auctionController@auction');
        Route::get('/creator/auction/{id}/edit', 'auctionController@editauction');
        Route::post('/creator/auction/{id}/edit', 'auctionController@updateauction');
        Route::get('/creator/auction/{id}/delete', 'auctionController@deleteauction');


        Route::get('/store', 'storeController@index');

        Route::post('/wallet/{id}', 'walletController@create');
        Route::get('/wallet/{id}', 'walletController@index');

        Route::get('/creation/{id}', 'creationController@index');

        Route::get('/auction', 'auctionController@index');

        Route::post('/nft/add/{id}/{cid}', 'nftController@add');
        Route::post('/nft/sell/{id}/{cid}', 'nftController@sell');
        Route::get('/nft/details/{id}', 'nftController@details');

        Route::get('/creations/{id}', 'nftController@creations');
        Route::get('/creations', 'nftController@creations');

        Route::get('/collections/{id}', 'nftController@collections');
        Route::get('/collections', 'nftController@collections');

        Route::get('/transactions/{id}', 'transactionController@index');
    });
    Route::group(['middleware' => ['manager']], function () {
        //write manager routes here
    });
});
