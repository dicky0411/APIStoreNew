<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Marvel extends Component
{
    public $daysTil, $overview, $release_date, $title;
    public function render()
    {
        return view('livewire.marvel');
    }
    public function search(){
        $url = "https://www.whenisthenextmcufilm.com/api";
        $response = Http::get($url);
        $result       = $response->json();
        $this->daysTil = $result["following_production"]["days_until"];
        $this->overview = $result["following_production"]["overview"];
        $this->release_date = $result["following_production"]["release_date"];
        $this->title = $result["following_production"]["title"];
    }
}
