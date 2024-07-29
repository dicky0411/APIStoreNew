<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Country extends Component
{
    public $countryCode;
    public $countryDetails;
    public $errorMessage = '';

    public function search()
    {
        $url = "https://restcountries.com/v3.1/alpha/{$this->countryCode}";

        $response = Http::get($url);

        if ($response->failed()) {
            $this->errorMessage = "Failed to retrieve data.";
            $this->countryDetails = null;
            return;
        }

        $this->countryDetails = $response->json();
        $this->errorMessage = '';
    }

    public function render()
    {
        return view('livewire.country');
    }
}
