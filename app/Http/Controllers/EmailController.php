<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Models\Technicien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function mailForm($id)
    {

        $Tech = Technicien::find($id);
        return view('services.techniciens.send_mail',['technicien'=>$Tech]);
    }

    public function sendMail(Request $request){
        $subject = $request->input('subject');
        $message = $request->input('message');
        $email = $request->input('email');
        // dd($subject);


        Mail::to($email)->send(new MailNotify($subject,$message));
        // return "<h1>SendMail</h1>";
    }

}
