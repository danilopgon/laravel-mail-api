<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TokenController;

Route::post('email', [EmailController::class, 'sendEmail']) -> middleware(EnsureTokenIsValid::class);
Route::get('token', [TokenController::class, 'generateToken']);
