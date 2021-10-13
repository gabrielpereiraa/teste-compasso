<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Product\ProductController;

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
    Auth::routes();

    Route::get('/about', function(){
        return view('about');
    })->name('about');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/profile', [App\Http\Controllers\User\UserController::class, 'index'])->name('profile');
    Route::put('/profile', [App\Http\Controllers\User\UserController::class, 'update'])->name('user.update');
    Route::delete('/profile', [App\Http\Controllers\User\UserController::class, 'destroy'])->name('user.destroy');

    Route::resource('stores', StoreController::class);
    Route::resource('products', ProductController::class);
    
