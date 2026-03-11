<?php

namespace App\Controllers;

class Login extends BaseController
{

  public function login()
{
    return view('login');
}

public function checkLogin()
{
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    if ($email == "admin@gmail.com" && $password == "1234") {

        session()->set('logged_in', true);

        return redirect()->to(base_url('public/dashboard'));

    } else {

        return redirect()->back()->with('error', 'Invalid Login');

    }
}

public function logout()
{
    session()->destroy();
    return redirect()->to('/login');
}
}