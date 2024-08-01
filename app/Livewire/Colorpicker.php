<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Colorpicker extends Component
{
    public $r ;
    public $g ;
    public $b ;
    public $hsl, $hex;
    public $errorMessage;
    public function render()
    {
        return view('livewire.colorpicker');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://color.serialif.com/".$this->r.",".$this->g.",".$this->b;
        $response = Http::get($url);
        
        if ($response->failed()){
            $this->errorMessage = "There is no data, Date is Invalid";
            return;
        }
        $result = $response->json();
        $this->hex = $result["base"]['hex']['value'];
        $this->hsl = $result['base']['hsl']['value'];
    }
}
