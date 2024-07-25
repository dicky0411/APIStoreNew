<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Ip2Region extends Component
{
    public $ip = '237.84.2.178';
    public $region;

    public $errorMessage = "";

    public function render()
    {
        return view('livewire.ip2region');
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
