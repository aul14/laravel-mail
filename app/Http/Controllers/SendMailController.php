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

        Mail::to($email)->send(new FirstMail($data));

        return 'email send successfully!';
    }
}
