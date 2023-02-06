<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\LocalizationController;


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


Route::get('/', [HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/updateprofile/{id}', [ProfileController::class, 'updateprofile'])->name('updateprofile');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
    Route::post('/order/{id}', [DetailController::class, 'order'])->name('order');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::get('/deletecart/{id}', [CartController::class, 'deletecart'])->name('deletecart');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
});

Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('/maintenance', [MaintenanceController::class, 'index'])->name('maintenance');
    Route::get('/showdata/{id}', [MaintenanceController::class, 'showdata'])->name('showdata');
    Route::post('/updatedata/{id}', [MaintenanceController::class, 'updatedata'])->name('updatedata');
    Route::get('/deletedata/{id}', [MaintenanceController::class, 'deletedata'])->name('deletedata');
});

Route::middleware('Guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'insertdata'])->name('insertdata');
});

// Localization

Route::get('locale/{lange}',[LocalizationController::class, 'setLang']);