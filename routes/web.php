<?php

use Illuminate\Support\Facades\Route;

// Define your routes here
Route::get('/mailable', function () {
    return view(
        'emails.contact',
        [
            'name' => 'John Doe',
            'email' => 'test@test.es',
            'phone' => '123456789',
            'formMessage' => 'Hello, this is a test email'
        ]
    );
});
