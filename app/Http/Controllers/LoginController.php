<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $title = 'Login - Responsible Mining Index';
        return view('pages.login', compact('title'));
    }
}
