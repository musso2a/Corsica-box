<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    //
function sendMail(Request $request){
$request->validate([
'name' => 'required',
'email' => 'required',
'message' => 'required',
]);
$information = [
'name' => $request->name,
'email' => $request->email,
'message' => $request->message,
];

Mail::to(request('email'))->send(new \App\Mail\ContactMail($information));
return view('contact');
}
}
