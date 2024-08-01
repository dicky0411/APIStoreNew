<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Kanye extends Component
{
    public $quote;
    
    public $errorMessage = '';
    public function render()
    {
        return view('livewire.kanye');
    }
    public function search(){
        
        $url = "https://api.kanye.rest/";
        $response = Http::get($url);
       
        $result = $response->json();
        $this->quote = $result['quote'];
    }
}
