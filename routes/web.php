<?php

use App\Http\Controllers\BreakdownController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreativeListController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SalesReportController;

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
//Members 
Route::get('/members/list', [RegistrationController::class, 'index']);
Route::get('/members/edit/{id}', [RegistrationController::class, 'show']);
Route::get('/members/show/{id}', [RegistrationController::class, 'show']);
Route::get('/members/create', [RegistrationController::class, 'create']);
Route::post('/members/update', [RegistrationController::class, 'update']);
Route::get('/members/delete/{id}', [RegistrationController::class, 'delete']);
Route::post('registration', [RegistrationController::class, 'store']);
Route::get('data_analyst/home', [HomeController::class, 'index']);
Route::resource('inventory', InventoryController::class);
Route::resource('sales', SalesReportController::class);
Route::get('/sales/pdf/download/{from}/{to}', [SalesReportController::class, 'pdf_download'])->name('download-pdf');
Route::get('demands', [DemandController::class, 'index']);
Route::get('competitor', [DemandController::class, 'competitor']);
Route::get('sales_report', [SalesReportController::class, 'sales_report']);
Route::resource('breakdown', BreakdownController::class);
Route::resource("/product", ProductController::class);
Route::get('profile/show', [ProfileController::class, 'index']);
Route::get('create-creative', [CreativeListController::class, 'create']);
Route::post('create-creative', [CreativeListController::class, 'store']);
Route::get('contact', [ContactController::class, 'index']);
Route::post('contact/create', [ContactController::class, 'store']);
