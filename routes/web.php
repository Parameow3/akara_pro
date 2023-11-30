<?php

use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('profile');
//});

Route::get('/', function () {
    return view('welcome');
})->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")->group(function () {
    Route::get('/premium/subscription', [PlanController::class, 'index'])->name('subscription');
    Route::get('/premium/subscription/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
});

Route::get('/user/profile', function () {
    return view('profile');
})->name('profile');

//Route::get('/premium/subscription', function () {
//    return view('subscription');
//})->name('subscription');

Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');

Route::get('/premium/subscription/success', function () {
    return view('success');
})->name('success');


Route::get('/navigate', function () {
    // Logic to determine where to navigate
    // For simplicity, assuming a random navigation
    return rand(0, 1) ? redirect()->route('profile') : redirect()->route('subscription');
})->name('navigate');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
