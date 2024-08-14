<?php

use App\Http\Controllers\CategoriesControler;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Brian2694\Toastr\Facades\Toastr;
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
    Route::prefix('/category')->group(function () {
        Route::get('/products/{id}', [FrontendController::class, 'prosByCat'])->name('cat.pros');
    });
    Route::get('/blog', [FrontendController::class, 'blog']);
    Route::get('/contact', [FrontendController::class, 'contact']);
    Route::post('/join_us', [FrontendController::class, 'joinUs']);
    Route::middleware(['auth.check'])->get('/profile/{id}', [FrontendController::class, 'profile'])->name('profile');
});


Route::middleware(['auth.redirect.type'])->prefix('/')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/signup', [UserController::class, 'create'])->name('signup');
});
Route::post('/login', [LoginController::class, 'login'])->name('doLogin');
Route::post('/signup', [UserController::class, 'store'])->name('doSignup');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth.check'])->prefix('/admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/tables', [DashboardController::class, 'tables']);
    Route::get('/billing', [DashboardController::class, 'billing']);
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
//        Route::post('/add', [CategoriesControler::class, 'store'])->name('cat.store');
        Route::get('/edit/{id}', [CategoriesControler::class, 'edit'])->name('cat.edit');
//        Route::post('/update', [CategoriesControler::class, 'update'])->name('cat.update');
//        Route::get('/delete/{id}', [CategoriesControler::class, 'delete'])->name('cat.delete');
    });
    Route::prefix('/user')->group(function () {
        Route::get('/list', [UserController::class, 'showList'])->name('user.list');
        Route::get('/{userId}', [UserController::class, 'index'])->name('user');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/update', [UserController::class, 'update'])->name('user.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });

});


Route::resource('testimonial', TestimonialController::class);
Route::resource('review', ProductReviewController::class);
Route::post('review/like', [ProductReviewController::class, 'like'])->name('review.like');

Route::prefix('/toast')->group(function () {
    Route::get('/', function () {
        Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    });
    Route::get('/wrongAuth', function () {
        Toastr::error('Feature not applicable for you', 'Auth Error!', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    })->name('toast.wa');
});

// after effects/controls
Route::prefix('/after')->group(function () {
    Route::get('/login', [LoginController::class, 'afterLogin'])->name('after.login');
});