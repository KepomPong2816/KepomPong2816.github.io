<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [MainController::class,'index']);

Route::get('/login', [AuthController::class,'login']);
Route::get('/login_auth', [AuthController::class,'login_auth']);