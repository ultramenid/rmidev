<?php

namespace App\Http\Livewire\Corporates;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EditCorporatesComponent extends Component{
    public $idcorporates;
    public $sidenav = 'overview';
    public $overview = true, $operationalrea = false, $financial = false, $corporatenetwork = false, $spotlight = false;
    public $overviewenglish, $overviewindonesia, $operationenglish, $operationindonesia, $financialenglish, $financialindonesia, $corporatenetworkenglish, $corporatenetworkindonesia, $corporatename, $spotlightenglish, $spotlightindonesia;

    public function mount($idcorporates){
        $this->idcorporates = $idcorporates;
        $data = DB::table('corporateprofilepages')->where('id', $idcorporates)->first();

        $this->corporatename = $data->name;
        $this->overviewenglish = $data->overviewenglish;
        $this->overviewindonesia = $data->overviewindonesia;
        $this->operationenglish = $data->operationareaenglish;
        $this->operationindonesia = $data->operationareaindonesia;
        $this->financialenglish = $data->financialownershipenglish;
        $this->financialindonesia = $data->financialownershipindonesia;
        $this->corporatenetworkenglish = $data->corporatenetworkenglish;
        $this->corporatenetworkindonesia = $data->corporatenetworkindonesia;
        $this->spotlightenglish = $data->spotlightcasesenglish;
        $this->spotlightindonesia = $data->spotlightcasesindonesia;
    }

    public function updateCorporate(){

       if($this->setValidation()){
        DB::table('corporateprofilepages')->where('id', $this->idcorporates)->update([
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
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]);
        $message = 'Successfully updating corporate content';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
       }


    }

    public function render(){
        return view('livewire.corporates.edit-corporates-component');
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
