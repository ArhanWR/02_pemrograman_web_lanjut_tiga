<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Redirect;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, ('index')]);

Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, ('product1')]);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, ('product2')]);
    Route::get('/riri-story-books', [ProductController::class, ('product3')]);
    Route::get('/kolak-kids-songs', [ProductController::class, ('product4')]);
});

Route::prefix('/news')->group(function (){
    Route::get('/', function (){
        return "Ini halaman untuk Berita Utama";
    });
    Route::get('/{newsTittle}', [NewsController::class, ('article')]);
});

Route::prefix('/category')->group(function () {
    Route::get('/karir', [ProgramController::class, ('program1')]);
    Route::get('/magang', [ProgramController::class, ('program2')]);
    Route::get('/kunjungan-industri', [ProgramController::class, ('program3')]);
});

Route::get('about-us', [HomeController::class, ('about')]);

Route::resource('contact-us', ContactController::class);