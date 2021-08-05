<?php

namespace App\Http\Livewire\Corporates;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class CreateCorporatesComponent extends Component{
    public $sidenav = 'overview';
    public $overview = true, $operationalrea = false, $financial = false, $corporatenetwork = false, $spotlight = false;
    public $overviewenglish, $overviewindonesia, $operationenglish, $operationindonesia, $financialenglish, $financialindonesia, $corporatenetworkenglish, $corporatenetworkindonesia, $corporatename, $spotlightenglish, $spotlightindonesia;


    public function storeCorporate(){
        if($this->setValidation()){
            DB::table('corporateprofilepages')->insert([
                'name'=> $this->corporatename,
                'overviewenglish' => $this->overviewenglish,
                'overviewindonesia' => $this->overviewindonesia,
                'operationareaenglish' => $this->operationenglish,
                'operationareaindonesia' => $this->operationindonesia,
                'financialownershipenglish' => $this->financialenglish,
                'financialownershipindonesia' => $this->financialindonesia,
                'corporatenetworkenglish' => $this->corporatenetworkenglish,
                'corporatenetworkindonesia' => $this->corporatenetworkindonesia,
                'spotlightcasesenglish' => $this->spotlightenglish,
                'spotlightcasesindonesia' => $this->spotlightindonesia,
                'created_at' => Carbon::now('Asia/Jakarta')
            ]);

            $message = 'Successfully submiting new corporate';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);

        }

    }



    public function render(){
        return view('livewire.corporates.create-corporates-component');
    }



    public function setValidation(){
        if($this->corporatename == ''){
            $message = 'Corporate name required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->overviewenglish == ''){
            $message = 'Overview  content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->overviewindonesia == ''){
            $message = 'Overview  content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->operationenglish == ''){
            $message = 'Operation area content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->operationindonesia == ''){
            $message = 'Operation area content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->financialenglish == ''){
            $message = 'Financial and Ownership content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->financialindonesia == ''){
            $message = 'Financial and Ownership content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->corporatenetworkenglish == ''){
            $message = 'Corporate Network content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->corporatenetworkindonesia == ''){
            $message = 'Corporate Network content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->spotlightenglish == ''){
            $message = 'Spotlight Cases content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->spotlightindonesia == ''){
            $message = 'Spotlight Cases content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}


