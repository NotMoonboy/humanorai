<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/locale/{locale}', LocaleController::class)
    ->whereIn('locale', ['en', 'sv'])
    ->name('locale.switch');

Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');