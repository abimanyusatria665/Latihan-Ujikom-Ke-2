<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('isGuest')->group(function(){
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register/post', [AuthController::class, 'registerInput'])->name('register.post');
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login/post',  [AuthController::class, 'loginInput']);
});

Route::middleware('isLogin')->group(function(){
    
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/product/create', [ProductController::class, 'create']);
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::post('/product/delete/{id}', [ProductController::class, 'destroy']);
    Route::get('/product', [ProductController::class, 'index']);
    
    Route::get('/selling', [SellingController::class, 'index']);
    Route::get('/selling/create', [SellingController::class, 'create']); 
    Route::get('/selling/detail/{id}', [SellingController::class, 'show']);
    Route::get('/selling/download/{id}', [SellingController::class, 'download']);
    Route::post('/selling/delete/{id}', [SellingController::class, 'destroy']);
});
