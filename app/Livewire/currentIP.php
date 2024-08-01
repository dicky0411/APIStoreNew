<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class currentIP extends Component
{
    public $ip;
    public function render()
    {
        return view('livewire.currentIP');
    }
    public function search()
    {
        
        $url = "https://api.ipify.org/?format=json";
        $response = Http::get($url);
        $result = $response->json();
        $this->ip = $result['ip'];
    }
}
