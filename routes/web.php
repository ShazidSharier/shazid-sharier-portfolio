<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebController;
Use App\Http\Controllers\UserController;


Route::get('/',[WebsiteController::class,'index']);



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/home', [DashboardController::class,'index'])->name('home');
    Route::resource('web', WebController::class);
    Route::resource('user', UserController::class);
});
