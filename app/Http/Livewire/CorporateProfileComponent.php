<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CorporateProfileComponent extends Component
{
    public $button = 'overview';

    public function getLocale(){
        if (App::getLocale() == 'id') {
            // return string db field name as content
            return 'contentindonesia as content';
        }
        // return string db field name as content
        return 'contentenglish as content';
    }

    public function getContent(){
        return  DB::table('corporateprofilepages')
                ->select($this->getLocale())
                ->where('name', $this->button)
                ->first();
    }

    public function setButton($value){
        $this->button = $value;
    }

    public function render()
    {
        $data = $this->getContent();
        return view('livewire.corporate-profile-component', compact('data'));
    }
}
