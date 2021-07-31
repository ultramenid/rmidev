<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;

class MethodologyPageController extends Controller
{
    public function index(){
        $title = 'Page Methodology - Responsible Mining Index';
        $nav = 'pages';
        return view('pages.cms.methodology', compact('title', 'nav'));
    }
}
