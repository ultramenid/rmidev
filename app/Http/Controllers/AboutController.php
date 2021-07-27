<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = 'About - Responsible Mining Index';
        return view('pages.about', compact('title'));
    }
}
