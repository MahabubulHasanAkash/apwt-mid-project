<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/NFTs', 'adminController@viewNFT_api');

Route::get('/admin/home', 'adminHome@index_api');

Route::get('/admin/viewDataAnalyst', 'dataAnalystController@view_api');

Route::get('/admin/adminPanel', 'adminController@view_api');

Route::get('/admin/terms', 'TermsController@view_api');

Route::get('/admin/artType', 'artTypeController@index_api');

Route::get('/admin/announcement', 'announcementController@index_api');

Route::get('/admin/viewCreator', 'adminController@viewCreators_api');

Route::get('/admin/viewCollector', 'adminController@viewCollectors_api');
