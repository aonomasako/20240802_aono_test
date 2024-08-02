<?php

namespace App\Http\Controllers;

use App\Http_Reqests\RegisterRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function admin()
    {
        return view('admin');
    }
    public function Thanks()
    {
        return view('thanks');
    }
}
