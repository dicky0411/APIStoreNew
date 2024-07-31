<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Ip2Region extends Component
{
    public $ip = '103.231.84.50';
    public $region;

    public $errorMessage = "";

    public function render()
    {
        return view('livewire.ip2region'); // The view file for this component
    }

    public function search()
    {
        $url = "http://ip-api.com/json/{$this->ip}?lang=zh-CN"; // Ensure the URL uses the IP

        $response = Http::get($url);

        if ($response->failed()) {
            $this->errorMessage = "请求失败";
            return;
        }

        $result       = $response->json();
        $this->region = $result['country'] ?? 'Unknown';
    }
}
