<?php

use App\Http\Controllers\crawlerController;
use App\Http\Controllers\productController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/products', [productController::class, 'indexProducts'])->name('products');
Route::post('/import-csv', [productController::class, 'importCsv'])->name('product.importCsv');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::get('/signup', [UserController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [UserController::class, 'register'])->name('user.register');
Route::get('/form', function (){
    return view('form');
});

Route::get('/about', function (){
    return view('about');
});
Route::get('/home', function(){
    return view('welcome');
});
