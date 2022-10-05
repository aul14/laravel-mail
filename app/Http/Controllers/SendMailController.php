<?php

namespace App\Http\Controllers;

use App\Jobs\FirstJob;
use App\Mail\FirstMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send()
    {
        // $email = 'test@test.com';
        // $data = [
        //     'title' => 'Selamat datang!',
        //     'url' => 'https://aul14.github.io/',
        // ];

        $delay = now()->addMinutes(1);

        # INI CARA PERTAMA TANPA QUEUE
        // Mail::to($email)->send(new FirstMail($data));
        # INI CARA KEDUA DENGAN QUEUE
        // Mail::to($email)->queue(new FirstMail($data));
        # INI CARA KETIGA DENGAN QUEUE + DELAY WAKTU
        // Mail::to($email)->later($delay, new FirstMail($data));

        # INI CARA KE EMPAT DENGAN QUEUE, TETAPI BUAT FILE JOBS
        // FirstJob::dispatch();
        dispatch(new FirstJob())->delay($delay);
        return 'email send successfully!';
    }
}
