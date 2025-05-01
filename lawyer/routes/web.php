<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('interface.welcome');
});

Route::get('/about', function () {
    return view('interface.about');
});

Route::get('/service', function () {
    return view('interface.service');
});

Route::get('/partner', function () {
    return view('interface.partner');
});
