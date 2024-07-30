<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ZipCode extends Component
{
    public $zip_code = '12345';
    public $location, $state;
    public $errorMessage = "";
    public function render()
    {
        return view('livewire.zip-code');
    }
    public function search()
    {
        $url = "https://api.zippopotam.us/us/".$this->zip_code;
        $response=Http::get($url);
        if ($response->failed()){
            $this -> errorMessage ="请求失败";
            return;
        }
        $result = $response->json();
        
        $this->location= $result['places'][0]["place name"];
        $this->state= $result['places'][0]['state'];
    }
}
