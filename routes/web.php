<?php

use App\Http\Controllers\CategoriesControler;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::prefix('/')->group(function () {
    Route::get('/', [FrontendController::class, 'index']);
    Route::prefix('/product')->group(function () {

        Route::get('/show/{id}', [ProductController::class, 'showOne'])->name('pro.show');
        Route::get('/list', [ProductController::class, 'showList'])->name('pro.list');
//        Route::get('/add', [CategoriesControler::class, 'create'])->name('pro.add');
//        Route::post('/add', [CategoriesControler::class, 'store'])->name('pro.store');
//        Route::get('/edit/{id}', [CategoriesControler::class, 'edit'])->name('pro.edit');
//        Route::post('/update', [CategoriesControler::class, 'update'])->name('pro.update');
//        Route::get('/delete/{id}', [CategoriesControler::class, 'delete'])->name('pro.delete');
    });
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('doLogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth.check'])->prefix('/admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/tables', [DashboardController::class, 'tables']);
    Route::get('/billing', [DashboardController::class, 'billing']);
    Route::get('/profile', [DashboardController::class, 'profile']);
    Route::prefix('/product')->group(function () {
        Route::get('/list', [ProductController::class, 'showListBack'])->name('admin.pro.list');
        Route::get('/add', [ProductController::class, 'add'])->name('admin.pro.add');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.pro.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.pro.edit');
        Route::post('/update', [ProductController::class, 'update'])->name('admin.pro.update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('admin.pro.del');
    });
    Route::prefix('/category')->group(function () {
        Route::get('/list', [CategoriesControler::class, 'index'])->name('cat.list');
        Route::get('/add', [CategoriesControler::class, 'create'])->name('cat.add');
        Route::post('/add', [CategoriesControler::class, 'store'])->name('cat.store');
        Route::get('/edit/{id}', [CategoriesControler::class, 'edit'])->name('cat.edit');
        Route::post('/update', [CategoriesControler::class, 'update'])->name('cat.update');
        Route::get('/delete/{id}', [CategoriesControler::class, 'delete'])->name('cat.delete');
    });

});
