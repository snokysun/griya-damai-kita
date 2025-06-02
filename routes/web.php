<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/cara-pemesanan', [PageController::class, 'caraPemesanan'])->name('cara.pemesanan');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
