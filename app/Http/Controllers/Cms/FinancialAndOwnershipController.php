<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancialAndOwnershipController extends Controller
{
    public function index(){
        $title = 'Financial And Ownership - Responsible Mining Index';
        $nav = 'pages';
        $sidenav = 'financialandownership';
        return view('pages.cms.financialandownership', compact('title', 'nav','sidenav'));
    }
}
