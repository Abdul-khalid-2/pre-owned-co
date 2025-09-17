<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// websites routes
Route::get('/', function () {
    return view('website.index');
})->name('web.home');
Route::get('/about', function () {
    return view('website.about');
})->name('web.about');
Route::get('/our-products', function () {
    return view('website.products');
})->name('web.products');




Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
