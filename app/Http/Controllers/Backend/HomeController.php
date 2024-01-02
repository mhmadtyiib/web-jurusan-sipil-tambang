<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('register');
    }
}
