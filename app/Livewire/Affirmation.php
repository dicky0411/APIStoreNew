<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Affirmation extends Component
{
    public $affirmation;
    
    public $errorMessage = '';
    public function render()
    {
        return view('livewire.affirmation');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://www.affirmations.dev/";
        $response = Http::get($url);
        if ($response->failed()) {
            $this->errorMessage = "请求失败/Check inputs again";
            return;
        }
        $result = $response->json();
        $this->affirmation = $result['affirmation'];
    }
}
