<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class DemoController extends Controller
{
    //
    function sendmail()
    {
        $data = [
            'key1' => 'Gửi dữ liệu từ controller qua nội dung mail'
        ];
        Mail::to('levietkhanh99@gmail.com')->send(new DemoMail($data));
    }
}
