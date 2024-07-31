<?php

namespace App\Livewire;

use Livewire\Component;

class AdvancedIP extends Component
{
    public $ip = "1.1.1.1";
    public $lat, $long, $zip, $company;

    public function render()
    {
        return view('livewire.advanced-ip');
    }
    public function search(){
        $url = "https://api.ipbase.com/v2/info?apikey=ipb_live_nDGsWNKRDwxPLFURcodIdbvklu16x32pDFgzwywY&ip=".$this->ip;

    }
}
