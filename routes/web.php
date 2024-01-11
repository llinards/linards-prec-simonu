<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/dashboard', '/viesi');

Route::middleware('auth')->group(function () {
    Route::get('/viesi', [GuestController::class, 'index'])->name('dashboard');
    Route::get('/viesi/{guest}/dzest', [GuestController::class, 'destroy'])->name('guest.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/gallery/add', [GalleryController::class, 'store'])->name('gallery.store');
    Route::post('/gallery/image/upload', [GalleryController::class, 'upload'])->name('gallery.upload');
    Route::delete('/gallery/image/upload', [GalleryController::class, 'delete'])->name('gallery.delete');
});

require __DIR__.'/auth.php';
