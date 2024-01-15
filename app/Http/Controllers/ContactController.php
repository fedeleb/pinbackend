<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:20',
            'topic' => 'required|string|max:255',
            'message' => 'required|string',
            'termsAccepted' => 'required|boolean',
        ]);

        // Enviar correo electrónico
        $data = [
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'topic' => $request->input('topic'),
            'message' => $request->input('message'),
            'termsAccepted' => $request->input('termsAccepted'),
        ];

        // Enviar el correo electrónico usando el Mailable
        Mail::to('fedeleb2007@gmail.com')->send(new ContactMail($data));

        // Puedes personalizar la respuesta según tus necesidades
        return response()->json(['message' => 'Datos enviados correctamente'], 200);
    }
}
