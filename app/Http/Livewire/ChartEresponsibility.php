<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ChartEresponsibility extends Component
{
    public function getBExecution(){
        return DB::table('corporateprofilepages')->select('name','eResponsibility','eAverage','fAll')->orderBy('eResponsibility', 'desc')->get();
    }
    public function render()
    {
        $corporateData = $this->getBExecution();
        return view('livewire.chart-eresponsibility', compact('corporateData'));
    }
}
