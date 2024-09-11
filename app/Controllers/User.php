<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        echo view('home');
    }
    public function menus()
    {
        echo view('menu');
    }
    public function about()
    {
        echo view('about');
    }
}
