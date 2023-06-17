<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Validation order mail',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('alaebenhamza3@gmail.com')->send(new DemoMail($mailData));
    }
}
