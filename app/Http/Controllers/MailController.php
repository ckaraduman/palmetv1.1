<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\SendMail;
use App\Mail\SendMail_Gsm;

class MailController extends Controller
{
  /*
  * Write code on Method
  *
  * @return response()
  */
    public function index()
  {
    // $data = [
    //     'title' => 'Palmet Digital bilgilendirme',
    //     'body' => 'This is for testing email using smtp and by CIKaraduman 2022 first mail.'
    // ];

    // Mail::to('cemilkerkaraduman@gmail.com')->send(new SendMail($data));

    // dd("Email is sent successfully.");
  }
}
?>
