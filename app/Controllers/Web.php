<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function index()
    {
        return view('web/halaman');
    }
    public function profile()
    {
        return view('web/profile');
    }
}
