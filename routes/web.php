<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
Route::get('/{category}-{slug}', [HomeController::class, 'category'])->name('home.category');
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'check_login']);
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.index');
    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class
    ]);

    Route::group(['prefix'=>'category'], function() {
        Route::get('category/rashed', [CategoryController::class, 'trashed'])->name('category.trashed');
        Route::get('restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
        Route::delete('force-delete/{category}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');
    });

});