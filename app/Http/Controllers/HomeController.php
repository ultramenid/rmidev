<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = 'Quitcoal - Responsible Mining Index';
        return view('pages.index', compact('title'));
    }
}
