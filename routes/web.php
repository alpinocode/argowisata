<?php

use App\Http\Controllers\argowisataContentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [argowisataContentController::class, 'beranda'])->name('beranda');
Route::get('/fasilitas', [argowisataContentController::class, 'fasilitas'])->name('fasilitas');
Route::get('/getInTouch', [argowisataContentController::class, 'getInTouch'])->name('getInTouch');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
