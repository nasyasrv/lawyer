<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\LawyerController::class, 'welcome'])->name('welcome');
Route::get('/about', [App\Http\Controllers\LawyerController::class, 'about'])->name('about');
Route::get('/service', [App\Http\Controllers\LawyerController::class, 'service'])->name('service');
Route::get('/partner', [App\Http\Controllers\LawyerController::class, 'partner'])->name('partner');
Route::get('/galery', [App\Http\Controllers\LawyerController::class, 'galery'])->name('galery');
Route::get('/article', [App\Http\Controllers\LawyerController::class, 'article'])->name('article');
Route::get('/jurnal', [App\Http\Controllers\LawyerController::class, 'jurnal'])->name('jurnal');
Route::get('/segment', [App\Http\Controllers\LawyerController::class, 'segment'])->name('segment');
Route::get('/superiority', [App\Http\Controllers\LawyerController::class, 'superiority'])->name('superiority');
Route::get('/contact', [App\Http\Controllers\LawyerController::class, 'contact'])->name('contact');


Route::resource('legal-opini', App\Http\Controllers\LegalOpiniController::class);
