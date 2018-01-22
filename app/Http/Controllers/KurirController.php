<?php

namespace App\Http\Controllers;

use App\Mail\KurirEmail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\KurirSendMail;

class KurirController extends Controller
{
    public function __construct()
    {
        // code...
    }

    public function index()
    {
        $details['email'] = 'muhamadismuaji@gmail.com';

        dispatch(new KurirSendMail($details));

        dd('berhasil');
    }

    public function sendMail()
    {
        $details['email'] = 'muhamadismuaji@gmail.com';

        Mail::to($details)->send(new KurirEmail);
    }
}
