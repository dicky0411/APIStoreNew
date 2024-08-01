<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AirQuality extends Component
{
    public $city;
    public $aqi;
    public $message;
    public $errorMessage = '';
    public function render()
    {
        return view('livewire.air-quality');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://api.waqi.info/feed/".$this->city."/?token=6ed027a8994d9f8d76d5ec37bd4293e257f69926";
        $response = Http::get($url);
        if ($response->failed()) {
            $this->errorMessage = "请求失败/Check inputs again";
            return;
        }
        $result =$response->json();
        if ($this-> aqi <50)
            $this->message = "Air quality is satisfactory, and air pollution poses little or no risk.";
         else if ($this-> aqi <100 && $this-> aqi >50)
            $this-> message = "Air quality is acceptable. However, there may be a risk for some people, particularly those who are unusually sensitive to air pollution.";
         else if ($this-> aqi <150 && $this-> aqi >100)
            $this-> message = "Members of sensitive groups may experience health effects. The general public is less likely to be affected.";
         else if ($this-> aqi <200 && $this-> aqi >150)
            $this-> message = "Some members of the general public may experience health effects; members of sensitive groups may experience more serious health effects.";
         else if ($this-> aqi <250 && $this-> aqi >200)
            $this-> message = "Health alert: The risk of health effects is increased for everyone.";
         else 
            $this-> message = "Health warning of emergency conditions: everyone is more likely to be affected.";
        
        $this->aqi = $result["data"]["aqi"]; 
    }
}
