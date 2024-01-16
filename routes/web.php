<?php

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

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('pages.home');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('pages.about');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('pages.contact');
Route::get('/product', [App\Http\Controllers\PageController::class, 'product'])->name('pages.product');



Auth::routes();

Route::get('/backend', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('backend.dashboard');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
