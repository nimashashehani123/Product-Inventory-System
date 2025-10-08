<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::middleware(['auth','verified'])->group(function() {
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');

    //admin
    Route::middleware('admin')->group(function() {
        Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    });

    //user
    Route::get('/dashboard', [UserController::class,'dashboard'])->name('dashboard');

    Route::resource('products', ProductController::class);

    Route::get('/profile',[ProfileController::class,'edit'])->name('profile.edit');
    Route::patch('/profile',[ProfileController::class,'update'])->name('profile.update');
    Route::delete('/profile',[ProfileController::class,'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
