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
    public function reservation()
    {
        echo view('reservation');
    }
    public function contact()
    {
        echo view('contact');
    }
}
