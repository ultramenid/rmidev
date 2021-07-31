<?php

    namespace App\Http\Controllers\Cms;
    use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard - Responsible Mining Index';
        $nav = 'dashboard';
        return view('pages.cms.dashboard', compact('title', 'nav'));
    }
}
