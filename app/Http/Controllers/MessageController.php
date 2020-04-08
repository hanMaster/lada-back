<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;
use App\Mail\FromSiteMail;

class MessageController extends Controller
{
    public function sendMessage(ContactFormRequest $request)
    {
        Mail::to(env('MAIL_RECIPIENT', '1@2.com'))->send(new FromSiteMail($request));
        return response()->json('Message sent', 200);
    }
}
