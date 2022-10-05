<?php

namespace App\Http\Controllers;

use App\Mail\FirstMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send()
    {
        $email = 'test@test.com';
        $data = [
            'title' => 'Selamat datang!',
            'url' => 'https://aul14.github.io/',
        ];

        $delay = now()->addMinutes(1);

        // Mail::to($email)->send(new FirstMail($data));
        // Mail::to($email)->queue(new FirstMail($data));
        Mail::to($email)->later($delay, new FirstMail($data));

        return 'email send successfully!';
    }
}
