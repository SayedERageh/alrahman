<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\AboutController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/من-نحن', [AboutController::class, 'index'])->name('about');

Route::get('/تواصل-معنا', [ContactController::class, 'index'])->name('contact');

// 🔥 Services Routes
Route::get('/الخدمات', [ServiceController::class, 'index'])->name('services.index');

Route::get('/الخدمات/{slug}', [ServiceController::class, 'show'])->name('services.show');


Route::get('/المقالات', [PostController::class, 'index'])->name('posts.index');

Route::get('/المقالات/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');