<?php

use App\Http\Livewire\Category\Index;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|---\-----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('main.about');
});

Route::get('/spesial', function () {
    return view('main.spesial');
});
Route::get('/contact-me', function () {
    return view('main.contact');
});

Route::get('/home', function () {
    return view('main.collection');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/category', Index::class)->name('category.index');
});



Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('users');

require __DIR__ . '/auth.php';
