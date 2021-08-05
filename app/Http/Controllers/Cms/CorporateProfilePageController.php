<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;

class CorporateProfilePageController extends Controller
{

    public function overview(){
        $title = 'Adding Corporate - Responsible Mining Index';
        $nav = 'corporates';
        $sidenav = 'overview';
        return view('pages.cms.corporates.addcorporate', compact('title','nav','sidenav'));
    }

    public function edit($id){
        $title = 'Editing Corporate - Responsible Mining Index';
        $nav = 'corporates';
        $sidenav = 'overview';
        $id = $id;
        return view('pages.cms.corporates.editcorporate', compact('title','nav','sidenav', 'id'));
    }


    public function index(){
        $title = 'Corporates Profile - Responsible Mining Index';
        $nav = 'corporates';
        $sidenav = 'overview';
        return view('pages.cms.corporateprofile', compact('title', 'nav','sidenav'));
    }
}
