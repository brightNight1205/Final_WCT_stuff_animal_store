<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', function () {
//     return response('Login page not implemented.', 401);
// })->name('login');
