<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\CategoryController;
use App\Http\Controllers\Web\ArticleController;
use App\Http\Controllers\Web\ImageController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);
    // Route::resource('users', ImageController::class);
    Route::get('images', [ImageController::class, 'index'])->name('images.index');
});
