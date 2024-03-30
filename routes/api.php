<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;

Route::post('email', 'EmailController@sendEmail') -> middleware(EnsureTokenIsValid::class);
