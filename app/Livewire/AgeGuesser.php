<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AgeGuesser extends Component
{
    public $name;
    public $age;
    public $errorMessage = '';
    public function render()
    {
        return view('livewire.age-guesser');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://api.agify.io/?name=".$this->name;
        $response = Http::get($url);
        if ($response->failed()) {
            $this->errorMessage = "请求失败/Check inputs again";
            return;
        }
        $result = $response->json();
        $this->age = $result['age'];
    }
}
