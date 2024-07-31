<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Country extends Component
{
    public $country ="Canada";
    public $capital, $region, $subregion, $population;
    public $independent_check, $unMember_check;
    public $errorMessage;
    public function render()
    {
        return view('livewire.country');
    }
    public function search(){
        $url = "https://restcountries.com/v3.1/name/".$this->country;
        $response = Http::get($url);
        if ($response->failed()){
            $this->errorMessage = "请求失败/Check inputs again";
            return;
        }
        $result = $response->json();

        $this->capital =  $result[0]['capital'][0];
        $this->region =   $result[0]['region'];
        $this->subregion =  $result[0]['subregion'];
        $this->population =  $result[0]['population'];
    }
}
