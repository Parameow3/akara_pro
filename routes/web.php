<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('profile');
});

Route::get('/user/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/premium/subscription', function () {
    return view('subscription');
})->name('subscription');

Route::get('/navigate', function () {
    // Logic to determine where to navigate
    // For simplicity, assuming a random navigation
    return rand(0, 1) ? redirect()->route('profile') : redirect()->route('subscription');
})->name('navigate');
