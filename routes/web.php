<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::name('web.')->group(function () {
    Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('home');
    Route::get('/about', [App\Http\Controllers\WebController::class, 'about'])->name('about');
    Route::get('/domain', [App\Http\Controllers\WebController::class, 'domains'])->name('domain');
    Route::get('/donation', [App\Http\Controllers\WebController::class, 'donation'])->name('donation');
    Route::get('/blog', [App\Http\Controllers\WebController::class, 'blog'])->name('blog');
    Route::get('/blog/{id}', [App\Http\Controllers\WebController::class, 'blogView'])->name('blog.view');
    Route::get('/videos', [App\Http\Controllers\WebController::class, 'videos'])->name('videos');
    Route::get('/images', [App\Http\Controllers\WebController::class, 'images'])->name('images');
    Route::get('/contact', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');
    Route::post('/contact', [App\Http\Controllers\WebController::class, 'contactSubmit'])->name('contact.submit');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
