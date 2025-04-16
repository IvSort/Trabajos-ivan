<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    
    public function login()
    {
        return view('login');
    }
    public function pantalla()
    {
        return view('pantalla');
    }

}
