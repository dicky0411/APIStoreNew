<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Http;
class ProfanityEraser extends Component
{
    public $message;
    public $returnMsg;
    public function render()
    {
        return view('livewire.profanity-eraser');
    }
    public function search()
    {
        $url = "https://www.purgomalum.com/service/json?text=".$this->message;
        
        $response = Http::get($url);
       
        $result = $response->json();
        
        $this->returnMsg = $result["result"];
    }
}
