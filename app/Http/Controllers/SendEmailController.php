<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

       
        $data = array(
            'name'      =>  $request->name,
            'surname'   => $request->surname,
            'message'   =>   $request->message,
            'email' => $request->email,
            'tel'   => $request->contact
        );

     Mail::to('scriptureunionbotswana@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
