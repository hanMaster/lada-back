<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\RecordMessageRequest;
use App\Mail\FromSiteMail;
use App\Mail\RecordMail;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function sendMessage(ContactFormRequest $request)
    {
        Mail::to(env('MAIL_RECIPIENT', '1@2.com'))->send(new FromSiteMail($request));
        return response()->json('Message sent', 200);
    }

    public function sendRecordMessage(RecordMessageRequest $request)
    {

        Mail::to($request->email)->send(new RecordMail($request));
        return response()->json('Message sent', 200);
    }
}
