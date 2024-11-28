<?php

use App\Http\Controllers\argowisataContentController;
use App\Http\Controllers\OrderTicket;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [argowisataContentController::class, 'beranda'])->name('beranda');
Route::get('/fasilitas', [argowisataContentController::class, 'fasilitas'])->name('fasilitas');
Route::get('/getInTouch', [argowisataContentController::class, 'getInTouch'])->name('getInTouch');
Route::get('/gallery', [argowisataContentController::class, 'gallery'])->name('gallery');
Route::get('/faq', [argowisataContentController::class, 'faq'])->name('faq');
Route::get('/orderTicket', [OrderTicket::class, 'page'])->name('orderTicketPage');

Route::post('/orderTicket',[OrderTicket::class, 'create'])->name('orderTicket.store');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
