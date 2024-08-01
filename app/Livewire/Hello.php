<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Hello extends Component
{
    public $language;
    public $hello;
    public $errorMessage ="";
    public function render()
    {
        return view('livewire.hello');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://hellosalut.stefanbohacek.dev/?lang=".$this->language;
        $response = Http::get($url);
        if ($response->failed()){
            $this->errorMessage ="请求失败/Check inputs again";
            return;
        }
        $result = $response->json();
        $this->hello = $result["hello"];
    }
}
