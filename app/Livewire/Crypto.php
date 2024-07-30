<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Crypto extends Component
{
    public $currency = "USD";
    public $symbol = "BTC";
    public $currencyPrice;
    public $errorMessage = "";
    public function render()
    {
        return view('livewire.crypto');
    }
    public function search()
    {
        $url = "https://coinlib.io/api/v1/coin?key=f60bde7f07658428&pref=".$this->currency."&symbol=".$this->symbol;
        $response = Http::get($url);
        if ($response->failed()){
            $this->errorMessage = "请求失败/Check inputs again";
            return;
        }
        
        $result = $response->json();
        $this->currencyPrice = $result['price'] ?? "Unknown";
    }

}