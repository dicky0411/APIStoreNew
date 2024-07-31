<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Currency extends Component
{
    public $country;
    public $currency;
    public $errorMessage = "";
    public function render()
    {
        return view('livewire.currency');
    }
    public function search(){
        $url = "https://api.fiscaldata.treasury.gov/services/api/fiscal_service/v1/accounting/od/rates_of_exchange";
        $response = Http::get($url);
        $result =$response->json();
        $i = 0;
        if ($response->failed()) {
            $this->errorMessage = "请求失败/Check inputs again";
            return;
        }
        while($result['data'][$i]['country']!=$this->country){
            $i++;
        }
        
        $this->currency = $result['data'][$i]['currency'];
    }
}
