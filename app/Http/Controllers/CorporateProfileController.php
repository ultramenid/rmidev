<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CorporateProfileController extends Controller{

    public function setTitle(){
        if (App::getLocale() == 'id') {
          return  'Profil Perusahaan - Responsible Mining Index';
        }
        return 'Corporate Profile - Responsible Mining Index';
    }

    public function getCorporates(){
        return DB::table('corporateprofilepages')
                    ->select('name', 'id')
                    ->orderBy('id', 'desc')
                    ->get();
    }

    public function index(){
        $title = $this->setTitle();
        // dd($this->getCorporates());
        $corporates = $this->getCorporates();
        $nav = 'corporateprofile';
        return view('pages.corporateprofile', compact('title', 'corporates','nav'));
    }


    public function detail($lang, $id){
        $id = $id;
        $nav = 'corporateprofile';
        $title =  'Detail Corporate - Responsible Mining Index';
        return view('pages.corporatesdetail', compact('title', 'id', 'nav'));
    }
}
