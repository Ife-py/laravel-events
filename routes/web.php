<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventsManagerController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});


Route::controller( EventsManagerController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/','store')->name('store');
    Route::get('/edit','edit')->name('edit');
});


Route::controller(LoginController::class)->prefix('login')->group(function(){
    Route::get('/','login')->name('login');
    // Route::put('/','store')->name('store');
});

Route::controller(RegisterController::class)->prefix('register')->group(function(){
    Route::get('/','register')->name('register');
    Route::post('/','store')->name('store');
});
