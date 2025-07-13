<?php

use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::get('/about', [NavigationController::class, 'about'])->name('about');
Route::get('/conference', [NavigationController::class, 'conference'])->name('conference');
Route::get('/business-matching', [NavigationController::class, 'businessmatching'])->name('businessmatching');
Route::get('/exhibition', [NavigationController::class, 'exhibition'])->name('exhibition');
