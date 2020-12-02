<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data['judulHalaman'] = 'Login';
        $data['template'] = 'login';
        return view('login/login', $data);
    }

    public function loginSipadu()
    {
        $data['judulHalaman'] = 'Login with SIPADU';
        $data['template'] = 'login';
        return view('login/loginSipadu', $data);
    }
}
