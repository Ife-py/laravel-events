<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventsManagerController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\events\eventController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::controller( EventsManagerController::class)->prefix('events')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/','store')->name('event.store');
        Route::get('/edit/{id}','edit')->name('event.edit');
        Route::put('/update/{event}','update')->name('update');
        Route::get('/delete/{event}','destroy')->name('event.delete');
    });
    Route::controller( AdminAuthController::class)->prefix('events')->group(function(){
        Route::get('/logout','logout')->name('logout');
    });
});


Route::controller(LoginController::class)->group(function(){
    Route::get('/','login')->name('login');
    Route::post('/','processLogin')->name('login.store');
});

Route::controller(RegisterController::class)->prefix('register')->group(function(){
    Route::get('/','register')->name('register');
    Route::post('/','store')->name('store');
});

Route::controller(eventController::class)->group(function(){
    Route::get('/event','event')->name('event');
});
