<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AdvancedIP extends Component
{
    public $ip;
    public $lat, $long, $zip, $company;
    public $errorMessage;
        

    public function render()
    {
        return view('livewire.advanced-ip');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://api.ipbase.com/v2/info?apikey=ipb_live_nDGsWNKRDwxPLFURcodIdbvklu16x32pDFgzwywY&ip=".$this->ip;
        $response = Http::get($url);
        if ($response->failed()){
            $this->errorMessage = "Check inputs again";
            return;
        }
        $result = $response->json();
        $this->lat= $result["data"]['location']['latitude'];
        $this->long= $result["data"]['location']['longitude'];
        $this->zip= $result["data"]['location']['zip'];
        $this->company= $result["data"]['connection']['isp'];
        
    }
}
