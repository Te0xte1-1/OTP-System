<?php

use App\Http\Controllers\OtpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/about_me', [OtpController::class, 'about_me'])->name('about_me');
Route::get('/sign_in', [OtpController::class, 'sign_in'])->name('sign_in');
Route::get('/sign_up', [OtpController::class, 'sign_up'])->name('sign_up');
Route::get('/forget', [OtpController::class, 'forget'])->name('forget');
Route::post('/otp', [OtpController::class, 'send'])->name('otp');
Route::post('/verfication', [OtpController::class, 'verfication'])->name('verfication');
Route::post('/otp/check', [OtpController::class, 'verify'])->name('otp.check');
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'store']);
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
