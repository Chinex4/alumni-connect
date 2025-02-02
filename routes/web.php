<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/committee', [HomeController::class, 'committee'])->name('committee');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/directory', [HomeController::class, 'directory'])->name('directory');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/typography', [HomeController::class, 'typography'])->name('typography');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
