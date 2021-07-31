<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CorporateProfileController extends Controller{

    public function index(){
        $title = 'Corporate Profile - Responsible Mining Index';
        return view('pages.corporateprofile', compact('title'));
    }
}
