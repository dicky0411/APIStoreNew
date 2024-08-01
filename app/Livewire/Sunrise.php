<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Sunrise extends Component
{
    public $latitude = "31.2304";
    public $longitude = "121.4737";
    public $timezone = "UTC+8";
    public $sunrise, $sunset;
    public $errorMessage;

    public function render()
    {
        return view('livewire.sunrise');
    }
    public function search(){
        $url = "https://api.sunrisesunset.io/json?lat=".$this->latitude."&lng=".$this->longitude."&timezone=".$this->timezone."&date=today";
        $response = Http::get($url);
        if ($response->failed()) {
            $this->errorMessage = "请求失败/Check inputs again";
            return;
        }
        $result = $response->json();
        $this->sunrise = $result["results"]["sunrise"];
        $this->sunset = $result["results"]["sunset"];

    }
}
