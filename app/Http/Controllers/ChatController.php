<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function showChat(){
        return view('Frontend.chat.chat');
    }

    public function showHome(){
        return view('Frontend.home.chat');
    }
}
