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

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin');

    Route::group(['prefix'=>'category'], function() {
        Route::get('', [CategoryController::class, 'index'])->name('category.index');
        Route::get('trashed', [CategoryController::class, 'trashed'])->name('category.trashed');

        Route::delete('delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');

        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('category.store');

        Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('update/{category}', [CategoryController::class, 'update'])->name('category.update');

        Route::get('restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
        Route::delete('force-delete/{category}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');
    });

    Route::group(['prefix'=>'product'], function() {
        Route::get('', [ProductController::class, 'index'])->name('product.index');

        Route::delete('delete/{product}', [ProductController::class, 'delete'])->name('product.delete');

        Route::get('create', [ProductController::class, 'create'])->name('product.create');
        Route::post('store', [ProductController::class, 'store'])->name('product.store');

        Route::get('edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('update/{product}', [ProductController::class, 'update'])->name('product.update');
    });
    
});