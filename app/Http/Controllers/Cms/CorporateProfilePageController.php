<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;

class CorporateProfilePageController extends Controller
{
    public function index(){
        $title = 'Overview Corporate Profile - Responsible Mining Index';
        $nav = 'pages';
        $sidenav = 'overview';
        return view('pages.cms.corporateprofile', compact('title', 'nav','sidenav'));
    }
}
