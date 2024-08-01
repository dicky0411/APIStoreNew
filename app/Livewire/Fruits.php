<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Fruits extends Component
{
    public $fruit;
    public $calories, $fat, $sugar, $carbohydrates, $protein;
    public $errorMessage ="";
    public function render()
    {
        return view('livewire.fruits');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://www.fruityvice.com/api/fruit/".$this->fruit;
        $response = Http::get($url);
        if ($response->failed()){
            $this->errorMessage ="请求失败/Check inputs again";
            return;
        }
        $result = $response->json();
        $this->fat = $result["nutritions"]['fat'];
        $this->calories = $result["nutritions"]["calories"];
        $this->sugar = $result["nutritions"]["sugar"];
        $this->carbohydrates = $result["nutritions"]["carbohydrates"];
        $this->protein = $result["nutritions"]["protein"];
    }
}
