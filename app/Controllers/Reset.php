<?php

namespace App\Controllers;

class Reset extends BaseController
{
    public function index()
    {
        $data['judulHalaman'] = 'Reset Password';
        $data['template'] = 'reset';
        return view('reset/inputemail', $data);
    }

    public function resetPass()
    {
        $data['judulHalaman'] = 'Reset Password';
        $data['template'] = 'reset';
        return view('reset/resetpass', $data);
    }
}
