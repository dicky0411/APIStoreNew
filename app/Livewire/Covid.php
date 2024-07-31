<?php

namespace App\Livewire;

use Livewire\Component;

class Covid extends Component
{
    public $year, $month, $day;
    public $state;

    public $positive;

    public function render()
    {
        return view('livewire.covid');
    }
    public function search(){
        $url = "https://api.covidtracking.com/v1/states/wa/20200620.json";
    }
}
