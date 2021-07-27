<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateProfileController extends Controller
{
    public function index(){
        $title = 'Corporate Profile - Responsible Mining Index';
        return view('pages.corporateprofile', compact('title'));
    }
}
