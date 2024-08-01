<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Nationality extends Component
{
    public $name = "richard";
    public $country_id, $probability = [];
    public $length;
    public $errorMessage;

    public function render()
    {
        return view('livewire.nationality');
    }
    public function search(){
        $this->resetResults();
        $url = "https://api.nationalize.io/?name=".$this->name;
        $response = Http::get($url);
        if ($response->failed()) {
            $this->errorMessage = "请求失败";
            return;
        }
        $result       = $response->json();
        $countries = $result["country"];
        foreach($countries as $country){
            $this->country_id[] = $country["country_id"];
            $percentage = $country["probability"] * 100;
            $this->probability[] = $percentage;
        }
    }
    private function resetResults()
    {
        $this->country_id = [];
        $this->probability = [];
        $this->errorMessage = null;
    }
}
