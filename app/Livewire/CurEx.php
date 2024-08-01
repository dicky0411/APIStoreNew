<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CurEx extends Component
{
    public $currency;
    public $amount ;
    public $currencyPrice;
    public $errorMessage ="";
    public $price;
    public function render()
    {
        return view('livewire.cur-ex');
    }
    public function search()
    {
        $this->errorMessage = "";
        $url = "https://v6.exchangerate-api.com/v6/210205ff24666156ebc8515a/latest/".$this->currency;
        
        $response = Http::get($url);
        if ($response->failed()){
            $this->errorMessage = "请求失败/Check inputs again";
            return;
        }
        $result =$response->json();
        $this->price = $result['conversion_rates']['USD'];
        $this->currencyPrice = $this->amount * $this->price;
    }

}
