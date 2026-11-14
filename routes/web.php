<?php

use App\Http\Controllers\OtpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sign_in');
});


Route::post('/otp', [OtpController::class, 'otp']);
Route::get('/sign_in', [OtpController::class, 'sign_in']);
Route::get('/sign_up', [OtpController::class, 'sign_up']);
Route::get('/forget', [OtpController::class, 'forget']);
Route::get('/verfication', [OtpController::class, 'verfication']);
