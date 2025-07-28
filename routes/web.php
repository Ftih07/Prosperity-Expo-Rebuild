<?php

use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::get('/about', [NavigationController::class, 'about'])->name('about');
Route::get('/conference', [NavigationController::class, 'conference'])->name('conference');
Route::get('/business-matching', [NavigationController::class, 'businessmatching'])->name('businessmatching');
Route::get('/exhibition', [NavigationController::class, 'exhibition'])->name('exhibition');

// Route for the interactive booth map.
// When a GET request is made to '/booth', it calls the 'booth' method
// in the NavigationController. The route is named 'booth' for easy referencing
// in views or other parts of the application (e.g., using route('booth')).
Route::get('/booth', [NavigationController::class, 'booth'])->name('booth');

// Route for downloading the event floor plan (denah).
// When a GET request is made to '/download-denah', it executes a closure function.
// This function retrieves the 'denah.pdf' file from the 'public/assets' directory
// and initiates a download for the user. The downloaded file will be named 'denah-prosperity-expo.pdf'.
Route::get('/download-denah', function () {
    // Define the path to the PDF file within the public directory.
    $file = public_path('assets/denah.pdf');
    // Return a download response, serving the file with a specified download name.
    return response()->download($file, 'denah-prosperity-expo.pdf');
});
