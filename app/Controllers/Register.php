<?php

namespace App\Controllers;

class Register extends BaseController
{

public function index()
{
    return view('register');
}

public function save()
{

$name = $this->request->getPost('name');
$email = $this->request->getPost('email');
$password = $this->request->getPost('password');

/* Here you can insert to database later */

session()->setFlashdata('success','User Registered Successfully');

return redirect()->back();

}

}