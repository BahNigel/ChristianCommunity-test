<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function showChat(){
        return view('Frontend.chat.chat');
    }

    public function status(){
        return view('Frontend.status.status');
    }
}
