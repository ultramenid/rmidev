<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
   public function index(){
    $title = 'Dashboard - Responsible Mining Index';
    $nav = 'settings';
    $sidenav = 'general';
    return view('pages.cms.settings', compact('title', 'nav', 'sidenav'));
   }
}
