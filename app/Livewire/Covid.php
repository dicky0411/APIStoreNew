<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Covid extends Component
{
    public $year, $month, $day;
    public $state;

    public $positive;
    public $errorMessage;

    public function render()
    {
        return view('livewire.covid');
    }
    public function search(){
        $url2 = $this->state."/".$this->year.$this->month.$this->day.".json";
        $url = "https://api.covidtracking.com/v1/states/".$url2;
        
        $response = Http::get($url);
        
        if ($response->failed()){
            $this->errorMessage = "There is no data, Date is Invalid";
            return;
        }
        $result = $response->json();
        
        $this->positive = $result["positive"];

    }
}
