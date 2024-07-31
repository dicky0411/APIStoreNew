<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AirPollutants extends Component
{
    public $city = "toronto";
    public $o3, $pm10, $pm25, $uvi;
    public $errorMessage ="";
    public function render()
    {
        return view('livewire.air-pollutants');
    }
    public function search(){
        $url = "https://api.waqi.info/feed/".$this->city."/?token=6ed027a8994d9f8d76d5ec37bd4293e257f69926";
        $response = Http::get($url);
        if ($response->failed()) {
            $this->errorMessage = "请求失败/Check inputs again";
            return;
        }
        $result = $response->json();
        $this->o3 = $result["data"]['forecast']['daily']['o3'][2]['avg'];
        $this->pm10 = $result["data"]['forecast']['daily']['pm10'][2]['avg'];
        $this->pm25 = $result["data"]['forecast']['daily']['pm25'][2]['avg'];
        $this->uvi = $result["data"]['forecast']['daily']['uvi'][2]['avg'];
    }
}
