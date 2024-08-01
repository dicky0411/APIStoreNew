<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Elevation extends Component
{
    public $latitude;
    public $longitude;
    public $elevation;
    public $errorMessage ="";
    public function render()
    {
        return view('livewire.elevation');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://api.opentopodata.org/v1/test-dataset?locations=".$this->latitude.",".$this->longitude;
        $response = Http::get($url);
        if ($response->failed()){
            $this->errorMessage ="请求失败/Check inputs again";
            return;
        }
        $result = $response->json();
       
        $this->elevation = $result["results"][0]["elevation"];
    }
}
