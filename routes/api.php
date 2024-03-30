<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\EmailController;

Route::post('email', [EmailController::class, 'sendEmail']) -> middleware(EnsureTokenIsValid::class);
