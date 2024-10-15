<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;

Route::get('/', function () {
    return view('authentication.login');
});
Route::post('/login',[AuthenticationController::class , 'login']);
Route::get('/dashboard', [DashboardController::class, 'viewMenu']);