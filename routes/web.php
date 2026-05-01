<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/من-نحن', function () {
    return view('pages.about');
})->name('about');
Route::get('/تواصل-معنا', function () {
    return view('pages.contact');
})->name('contact');


// 🔥 Services Routes
Route::get('/الخدمات', [ServiceController::class, 'index'])->name('services.index');

Route::get('/الخدمات/{slug}', [ServiceController::class, 'show'])->name('services.show');


Route::get('/المقالات', [PostController::class, 'index'])->name('posts.index');

Route::get('/المقالات/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');