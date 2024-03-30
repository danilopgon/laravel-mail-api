<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class EmailController
{
    public function sendEmail(Request $request)
    {
        $name = (string) $request->json('name');
        $email = (string) $request->json('email');
        $phone = (string) $request->json('phone');
        $formMessage = (string) $request->json('message');

        if (!$name || !$email || !$phone || !$formMessage) {
            return response()->json(['message' => 'Missing data'], 400);
        }

        // Send email
        try {
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($name, $email, $phone, $formMessage));

            return response()->json(['message' => 'Email sent']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error sending email', 'error'  => $e->getMessage()], 500);
        }
    }
}
