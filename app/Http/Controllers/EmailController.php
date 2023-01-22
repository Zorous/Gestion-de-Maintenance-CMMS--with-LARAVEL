<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Models\Technicien;
use Illuminate\Http\Request;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function mailForm($id)
    {

        $Tech = Technicien::find($id);
        return view('services.techniciens.send_mail',['technicien'=>$Tech]);
    }

    public function sendMail(Request $request){
        $name = $request->input('name');
        // return 'haha';

        // Mail::to('test@gmail.com')->send(new MailNotify());
        return "<h1>SendMail</h1>";
    }

}
