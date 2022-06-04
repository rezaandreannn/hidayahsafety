<?php

use App\Http\Livewire\Category\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\SpesialsContoller;
use App\Http\Controllers\Admin\ProduksController;
use App\Http\Controllers\Main\CollectionsContoller;

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

Route::get('/home', CollectionsContoller::class)->name('collection');
Route::get('/spesial', SpesialsContoller::class)->name('spesial');
Route::get('/category/{$id}', SpesialsContoller::class)->name('category.show');


Route::get('/about', function () {
    return view('main.about');
});

// Route::get('/spesial', function () {
//     return view('main.spesial');
// });
Route::get('/contact-me', function () {
    return view('main.contact');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/category', Index::class)->name('category.index');
    Route::resource('produk', ProduksController::class);
});



Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('users');

require __DIR__ . '/auth.php';
