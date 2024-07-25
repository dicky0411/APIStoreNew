<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MyLocation extends Component
{
    public $errorMessage = "";
    public $region;

    public function render()
    {
        return view('livewire.myLocation');
    }

    public function search()
    {
        $url = "http://ip-api.com/json/?lang=zh-CN";

        $response = Http::get($url);

        if ($response->failed()) {
            $this->errorMessage = "请求失败";
            return;
        }

        $result       = $response->json();
        $region       = $result['country'];
        $this->region = $region;
    }
}
