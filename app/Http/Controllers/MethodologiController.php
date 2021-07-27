<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MethodologiController extends Controller
{
    public function index(){
        $title = 'Methodology - Responsible Mining Index';
        return view('pages.methodology', compact('title'));
    }
}
