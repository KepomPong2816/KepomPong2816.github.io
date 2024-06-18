<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data['title'] = "Login E-Learning";

        return
            view('auth/header', $data) .
            view('auth/login', $data) .
            view('auth/footer', $data);
    }

    public function login_auth(Request $req)
    {
        
    }


}
