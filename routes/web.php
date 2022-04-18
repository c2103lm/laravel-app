<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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
Route::get('', [HomeController::class, 'home'])->name('home');
// http://127.0.0.1:3000/gioi-thieu

Route::get('gioi-thieu', [HomeController::class, 'about'])->name('about');

Route::group(['prefix' => 'admin'], function() {
    Route::get('', [AdminController::class, 'dashboard'])->name('admin');

    Route::group(['prefix'=>'category'], function() {
        Route::get('', [CategoryController::class, 'index'])->name('category.index');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('category.store');
    });
    
});