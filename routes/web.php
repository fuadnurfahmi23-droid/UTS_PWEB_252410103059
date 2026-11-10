<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'login']);
Route::post('/dashboard', [PageController::class, 'dashboard']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::post('/Menu', [PageController::class, 'pengelola']);
Route::get('/Menu', [PageController::class, 'pengelola']);
Route::post('/profile', [PageController::class, 'profil']);
Route::get('/profile', [PageController::class, 'profil']);

