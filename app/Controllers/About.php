<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        helper('url');

        $data = [
            'title' => 'About Us',
            'company' => 'Your Company Name',
            'description' => 'We are a passionate team providing quality services to our customers.',
            'mission' => 'Our mission is to deliver high quality solutions with creativity and innovation.',
            'vision' => 'To become a trusted brand that customers love and rely on.'
        ];

        return view('about', $data);
    }
}