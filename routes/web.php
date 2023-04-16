<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/details/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/success', [App\Http\Controllers\CartController::class, 'success'])->name('success');

Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'success'])->name('register-success');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/products', [App\Http\Controllers\DashboardProductController::class, 'index'])
    ->name('dashboard-products');
Route::get('/dashboard/products/create', [App\Http\Controllers\DashboardProductController::class, 'create'])
    ->name('dashboard-products-add');
Route::get('/dashboard/products/{id}', [App\Http\Controllers\DashboardProductController::class, 'details'])
    ->name('dashboard-products-details');

Route::get('/dashboard/transactions', [App\Http\Controllers\DashboardTransactionsController::class, 'index'])
    ->name('dashboard-transactions');
Route::get('/dashboard/transactions/{id}', [App\Http\Controllers\DashboardTransactionsController::class, 'details'])
    ->name('dashboard-transactions-details');

Route::get('/dashboard/setting', [App\Http\Controllers\DashboardSettingController::class, 'store'])
    ->name('dashboard-setting-store');
Route::get('/dashboard/account', [App\Http\Controllers\DashboardSettingController::class, 'account'])
    ->name('dashboard-setting-account');

    // ->middleware('auth', 'admin')
Route::prefix('admin')
    ->group(function() {
        Route::get('/', [DashboardController::class,'index'])->name('admin-dashboard');
         Route::resource('category', CategoryController::class);
//         Route::resource('gallery', GalleryController::class);
//         Route::resource('transaction', TransactionController::class);
 });
Auth::routes();

