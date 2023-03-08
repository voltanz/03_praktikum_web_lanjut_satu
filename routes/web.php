<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::prefix('/category')->group(function(){
    Route::get('/product1', [ProductController::class, 'product1']);
    Route::get('/product2', [ProductController::class, 'product2']);
});

Route::get('/news/{news?}', [NewsController::class, 'news']);

Route::prefix('/program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
});

Route::get('/aboutUs', [AboutController::class, 'about']);

Route::resource('/contactUs', ContactController::class);