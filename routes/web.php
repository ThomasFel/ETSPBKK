<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NewsController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/collaboration', [HomeController::class, 'collaboration'])->name('collaboration');
Route::get('/company', [HomeController::class, 'company'])->name('company');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/order', [HomeController::class, 'order'])->name('order');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/service', [HomeController::class, 'service'])->name('service');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    
    Route::get('/admin/users', [AdminController::class, 'list_user']);

    Route::get('/admin/customers', [CustomerController::class, 'index']);

    Route::get('/admin/news', [NewsController::class, 'index']);
});