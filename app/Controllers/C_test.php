<?php

namespace App\Controllers;

class C_test extends BaseController
{
    public function index(): string
    {
        return view('v_test');
    }
}
