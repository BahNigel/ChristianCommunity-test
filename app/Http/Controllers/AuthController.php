<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('Frontend.user_auth.sign-in');
    }

    public function showRegister(){
        return view('Frontend.user_auth.sign-up');
    }
}
