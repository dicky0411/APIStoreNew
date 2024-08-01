<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Gender extends Component
{
    public $name;
    public $gender, $percentage;
    public function render()
    {
        return view('livewire.gender');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://api.genderize.io/?name=".$this->name;
        $response = Http::get($url);
        $result = $response->json();
        $this->gender = $result["gender"];
        $this->percentage = $result["probability"]*100;
    }
}
