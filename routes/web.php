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
Route::get('/news/{id}', [HomeController::class, 'showPost'])->name('news.show');
Route::get('/order', [HomeController::class, 'order'])->name('order');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/service', [HomeController::class, 'service'])->name('service');

Route::post('/order', [CustomerController::class, 'store'])->name('customer.add');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::get('/admin/users', [AdminController::class, 'list_user'])->name('admin.users');

    Route::get('/admin/customers', [CustomerController::class, 'index'])->name('admin.customers');
    Route::get('/admin/edit-customer/{id}', [CustomerController::class, 'edit'])->name('admin.customer.edit');
    Route::post('/admin/edit-customer/{id}', [CustomerController::class, 'update'])->name('admin.customer.update');
    Route::post('/admin/delete-customer/{id}', [CustomerController::class, 'destroy'])->name('admin.customer.delete');

    Route::get('/admin/news', [NewsController::class, 'index'])->name('admin.news');
    Route::get('/admin/edit-news/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::get('/admin/create-news/', [NewsController::class, 'create'])->name('admin.news.show_add');
    Route::post('/admin/edit-news/{id}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::post('/admin/create-news/', [NewsController::class, 'store'])->name('admin.news.add');
    Route::post('/admin/delete-news/{id}', [NewsController::class, 'destroy'])->name('admin.news.delete');
});