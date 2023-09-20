<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\Auth\AdminRegisterController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;

use App\Http\Controllers\Main\IndexMainController;
use App\Http\Controllers\Main\ShowMainPostController;

use App\Http\Controllers\Admin\Category\IndexCategoryController;
use App\Http\Controllers\Admin\Category\CreateCategoryController;
use App\Http\Controllers\Admin\Category\StoreCategoryController;
use App\Http\Controllers\Admin\Category\ShowCategoryController;
use App\Http\Controllers\Admin\Category\EditCategoryController;
use App\Http\Controllers\Admin\Category\UpdateCategoryController;
use App\Http\Controllers\Admin\Category\DeleteCategoryController;

use App\Http\Controllers\Admin\Post\IndexPostController;
use App\Http\Controllers\Admin\Post\CreatePostController;
use App\Http\Controllers\Admin\Post\StorePostController;
use App\Http\Controllers\Admin\Post\ShowPostController;
use App\Http\Controllers\Admin\Post\EditPostController;
use App\Http\Controllers\Admin\Post\UpdatePostController;
use App\Http\Controllers\Admin\Post\DeletePostController;

use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['namespace' => 'Main'], function() {
    Route::get('/', [IndexMainController::class, 'create'])->name('main.index');
});

Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function() {
    Route::get('/{post}', [ShowMainPostController::class, 'show'])->name('main.post.index');
});


Route::group(['namespace' => 'AdminLogin', 'prefix' => 'admin_login'], function() {
    Route::get('/register', [AdminRegisterController::class, 'create'])->name('admin.register');
    Route::post('/register', [AdminRegisterController::class, 'store']);
    Route::get('/login', [AdminLoginController::class, 'create'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'store']);
    Route::post('/logout', [AdminLoginController::class, 'destroy'])->name('admin.logout');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth' ,'admin']], function() {

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function() {
        Route::get('/', [IndexCategoryController::class, 'create'])->name('admin.category.index');
        Route::get('/create', [CreateCategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [StoreCategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [ShowCategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [EditCategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [UpdateCategoryController::class, 'edit'])->name('admin.category.update');
        Route::delete('/{category}', [DeleteCategoryController::class, 'delete'])->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'post'], function() {
        Route::get('/', [IndexPostController::class, 'create'])->name('admin.post.index');
        Route::get('/create', [CreatePostController::class, 'create'])->name('admin.post.create');
        Route::post('/', [StorePostController::class, 'store'])->name('admin.post.store');
        Route::get('/{post}', [ShowPostController::class, 'show'])->name('admin.post.show');
        Route::get('/{post}/edit', [EditPostController::class, 'edit'])->name('admin.post.edit');
        Route::patch('/{post}', [UpdatePostController::class, 'edit'])->name('admin.post.update');
        Route::delete('/{post}', [DeletePostController::class, 'delete'])->name('admin.post.delete');
    });
});

