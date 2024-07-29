<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Calendar extends Component
{
    
    public $month = 12;
    public $day = 25;
    public $holidayName;

    public $errorMessage = "";

    public function render()
    {
        return view('livewire.calendar'); // The view file for this component
    }

    public function search()
    {
        $url = "https://holidays.abstractapi.com/v1/?api_key=0bca8f93ee204c0ca8af40c092580318&country=US&year=2020&month={$this->month}&day={$this->day}";

        $response = Http::get($url);

        if ($response->failed()) {
            $this->errorMessage = "请求失败";
            return;
        }

        $result       = $response->json();
        $this->holidayName = $result['name'] ?? 'Unknown';
    }
}
