<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        $data['judulHalaman'] = 'Register';
        $data['template'] = 'register';
        return view('register/register', $data);
    }

    public function success()
    {
        $data['judulHalaman'] = 'Register Success';
        $data['template'] = 'register';
        return view('register/register_success', $data);
    }
}
