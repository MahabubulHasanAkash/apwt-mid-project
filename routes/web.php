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

Route::get('/login', 'auth@index');
Route::post('/login', 'auth@verifylogin');
Route::get('/logout', 'auth@logout');
Route::get('/creator/signup', 'signupController@creator_index');
Route::get('/creation', 'creationController@index');
Route::post('/creator/signup', 'signupController@creator_signup');
Route::get('/collector/signup', 'signupController@collector_index');
Route::post('/collector/signup', 'signupController@collector_signup');
Route::get('/NFTs', 'adminController@viewNFT');
Route::post('/NFTs/searchNFT', 'adminController@searchNFT');
Route::get('/terms', 'termsController@commonView');
Route::get('/announcements', 'announcementController@commonView');
Route::post('/collector/signup', 'signupController@collector_signup');

Route::group(['middleware' => ['session']], function () {
    Route::group(['middleware' => ['admin']], function () {
        //write admin routes here
        Route::get('/admin/home', 'adminHome@index');
        Route::post('/admin/searchActivity', 'adminHome@searchActivity');

        Route::get('/admin/addDataAnalyst', 'dataAnalystController@signup');
        Route::post('/admin/addDataAnalyst', 'signupController@dataAnalyst_signup');
        Route::get('/admin/viewDataAnalyst', 'dataAnalystController@view');
        

        Route::get('/admin/editProfile/{id}', 'adminController@edit');
        Route::post('/admin/editProfile/{id}', 'adminController@update');

        Route::get('/admin/adminPanel', 'adminController@view');
        Route::post('/admin/searchAdmin', 'adminController@searchAdmin');

        Route::get('/admin/terms', 'TermsController@view');
        Route::post('/admin/terms', 'TermsController@update');

        Route::get('/admin/artType', 'artTypeController@index');
        Route::post('/admin/artType', 'artTypeController@insert');
        Route::get('/admin/artType/delete/{id}', 'artTypeController@delete');

        Route::get('/admin/announcement', 'announcementController@index');
        Route::post('/admin/announcement', 'announcementController@insert');
        Route::post('/admin/announcement/edit/{id}', 'announcementController@edit');
        Route::get('/admin/announcement/delete/{id}', 'announcementController@delete');

        Route::get('/admin/viewCreator', 'adminController@viewCreators');
        Route::post('/admin/searchCreator', 'adminController@searchCreator');
        Route::get('/admin/viewCreator/delete/{id}', 'adminController@deleteCreator');

        Route::get('/admin/viewCollector', 'adminController@viewCollectors');
        Route::post('/admin/searchCollector', 'adminController@searchCollector');
        Route::get('/admin/viewCollector/delete/{id}', 'adminController@deleteCollector');



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
