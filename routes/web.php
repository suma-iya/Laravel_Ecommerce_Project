<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;


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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout');
Route::get('/shop', [MainController::class, 'shop'])->name('shop');
Route::get('/product', [MainController::class, 'singleProduct'])->name('singleProduct');
Route::get('/register', [MainController::class, 'register'])->name('register');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/registerUser', [MainController::class, 'registerUser'])->name('registerUser');
Route::post('/loginUser', [MainController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [MainController::class, 'logout'])->name('logout');
Route::get('/deleteCartItem/{id}',[MainController::class,'deleteCartItem']);
Route::get('/single/{id}', [MainController::class, 'singleProduct'])->name('singleProduct');
Route::post('/addToCart', [MainController::class, 'addToCart'])->name('addToCart');
Route::get('/your-form-page', [MainController::class, 'showFormPage']);
Route::post('/updateCart', [MainController::class, 'updateCart'])->name('updateCart');
Route::post('/checkout', [MainController::class, 'checkout'])->name('checkout');
Route::get('/profile', [MainController::class, 'profile'])->name('profile');
Route::post('/updateUser', [MainController::class, 'updateUser'])->name('updateUser');