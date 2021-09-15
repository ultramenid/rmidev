<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ChartBconduct extends Component
{
    public function getBExecution(){
        return DB::table('corporateprofilepages')->select('name','bExecution','bAverage','bAll')->orderBy('bExecution', 'desc')->get();
    }
    public function render(){
        $corporateData = $this->getBExecution();
        return view('livewire.chart-bconduct', compact('corporateData'));
    }
}
