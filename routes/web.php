<?php

use Illuminate\Support\Facades\Route;

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
    return View::make('pages.homes');
});

Route::get('/profile', function () {
    return View::make('pages.profile');
});

Route::get('/company', function () {
    return View::make('pages.company');
});

Route::get('/service', function () {
    return View::make('pages.service');
});

Route::get('/collaboration', function () {
    return View::make('pages.collaboration');
});

Route::get('/news', function () {
    return View::make('pages.news');
});

Route::get('/order', function () {
    return View::make('pages.order');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('/home/customers', \App\Http\Controllers\CustomerController::class)
    ->middleware('auth');

Route::resource('/home/users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('/home/news', \App\Http\Controllers\NewsController::class)
    ->middleware('auth');