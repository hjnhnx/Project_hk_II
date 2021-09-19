<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_mail(){
        $data = [
        ];
        Mail::send('send_mail',$data,function ($message){
            $message->from('SunMobile@outlook.com.vn','SunMobile');
            $message->to('cuongnmth2009037@fpt.edu.vn','cuong');
            $message->subject('Cảm ơn bạn đã mua hàng tại SunMobile.');
        });
    }
}
