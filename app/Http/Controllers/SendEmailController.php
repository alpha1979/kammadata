<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\SendEmail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendEmailController extends Controller
{
    //

    public function index(){
        return view('sendmail.index');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|min:4',
            'friend_name' =>'required|min:4',
            'friend_email' =>'required|email',
        ]);
       SendEmail::create($request->all());
    //    $data = [
    //     'name' => $request->name,
    //     'friend_name' => $request->friend_name,
    //     ];

  

    $data = Mail::to($request->friend_email)->send(new SendMail($request->name, $request->friend_name));
        //dd($data);
    // Session::flash('message', 'Data stored and sent the email');
    return redirect()->route('send-email.index');
        
        
        
        return "this is email store page";
    }
}