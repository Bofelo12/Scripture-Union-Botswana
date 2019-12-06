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
      'message' =>  'required',
      'cell' =>  'required'
     ]);

       
        $data = array(
            'name'      =>  $request->name,          
            'message'   =>   $request->message,
            'email' => $request->email,
            'tel'   => $request->cell
        );

     Mail::to('scriptureunionbotswana@gmail.com')->send(new SendMail($data));
     return redirect()->route('contact')->with('success', 'Email sent, thanks for contacting us!');

    }
}
