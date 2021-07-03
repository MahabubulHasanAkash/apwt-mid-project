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

Route::get('/', function () {
    return redirect('login');
});

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login']);
//Route::get('registration', [RegistrationController::class, 'index']);

//Members 
Route::get('/members/list', [RegistrationController::class, 'index']);
Route::get('/members/edit/{id}', [RegistrationController::class, 'show']);
Route::get('/members/show/{id}', [RegistrationController::class, 'show']);
Route::get('/members/create', [RegistrationController::class, 'create']);
Route::post('/members/update', [RegistrationController::class, 'update']);
Route::get('/members/delete/{id}', [RegistrationController::class, 'delete']);
Route::post('registration', [RegistrationController::class, 'store']);

Route::get('home', [HomeController::class, 'index']);
Route::resource('inventory', InventoryController::class);
Route::resource('sales', SalesReportController::class);
//download Sales Report

// Route::get('sales/pdf/download', function () {
//     dd("shawaoo");
// });

Route::get('/sales/pdf/download/{from}/{to}', [SalesReportController::class, 'pdf_download'])->name('download-pdf');


Route::get('demands', [DemandController::class, 'index']);
Route::get('competitor', [DemandController::class, 'competitor']);
Route::get('sales_report', [SalesReportController::class, 'sales_report']);

//Breakdown Report
Route::resource('breakdown', BreakdownController::class);


//Logout
Route::get('logout', [RegistrationController::class, 'logout']);

Route::resource("/product", ProductController::class);


Route::get('profile/show', [ProfileController::class, 'index']);

// Route::post('profile/create', [ProfileController::class, 'store']);

// Route::get('profile/edit', [ProfileController::class, 'create']);
// Route::get('profile/update', [ProfileController::class, 'store']);

// Route::get('creative-list', [CreativeListController::class, 'index']);
Route::get('create-creative', [CreativeListController::class, 'create']);
// Route::get('update-create/{id}', [CreativeListController::class, 'edit']);
// Route::get('delete-create/{id}', [CreativeListController::class, 'destroy']);
Route::post('create-creative', [CreativeListController::class, 'store']);
// Route::post('update', [CreativeListController::class, 'update']);

Route::get('contact', [ContactController::class, 'index']);
Route::post('contact/create', [ContactController::class, 'store']);
