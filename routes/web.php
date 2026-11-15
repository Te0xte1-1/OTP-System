<?php

use App\Http\Controllers\OtpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::post('/otp', [OtpController::class, 'otp'])->name('otp');
Route::get('/sign_in', [OtpController::class, 'sign_in'])->name('sign_in');
Route::get('/sign_up', [OtpController::class, 'sign_up'])->name('sign_up');
Route::get('/forget', [OtpController::class, 'forget'])->name('forget');
Route::get('/verfication', [OtpController::class, 'verfication'])->name('verfication');
Route::post('/otp/check', [OtpController::class, 'verify'])->name('otp.check');
