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

Route::get('/about', function () {
    return view('main.about');
});
Route::get('/spesial', function () {
    return view('main.spesial');
});
Route::get('/home', function () {
    return view('main.collection');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('users');

require __DIR__ . '/auth.php';
