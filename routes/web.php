<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('app');
});
Route::get('/otp', function () {
    return view('otp');
});
Route::get('/sign_in', function () {
    return view('sign_in');
});
Route::get('/sign_up', function () {
    return view('sign_up');
});
Route::post('/sign_in_store', function () {
    return "store";
});
