<?php

namespace App\Http\Controllers;

use App\Mail\ChatMail;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ChatController extends Controller
{
public function send(Request $chatReq)
{
    $chatReq->validate([
        'name' => 'required',
        'email' => 'required | email',
        'message' => 'required'
    ]);
    $chat =[
        'name' => $chatReq->name,
        'email' => $chatReq->emal,
        'message' => $chatReq->message
    ];

    $sendMail = Mail::to(setting('site.mailto'))
                        ->send(new ChatMail($chat));

return redirect()->back()->with('success','your message has been send to the team');
}




}
