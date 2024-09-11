<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        echo view('home');
    }
}
