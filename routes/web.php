<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('auth/google', [SocialController::class, 'googleRedirect'])->name('login');
Route::get('auth/google/callback', [SocialController::class, 'loginWithGoogle'])->name('callback');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home');
