<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Urlshortener extends Component
{
    public $link = "";
    public $custom = "";
    public $errorMessage = "";
    public $shorten = "";

    public function render()
    {
        return view('livewire.urlshortener');
    }

    public function search()
    {
        // Construct the URL with query parameters
        $url = "https://ulvis.net/api.php?url=" . urlencode($this->link) . "&custom=" . urlencode($this->custom) . "&private=1";

        try {
            // Send the HTTP request
            $response = Http::get($url);

            // Check if the response is successful
            if ($response->successful()) {
                // Parse the JSON response
                $result = $response->json();

                // Check if the 'short' key exists in the response
                if (isset($result['short'])) {
                    $this->shorten = $result['short'];
                    $this->errorMessage = "";
                } else {
                    $this->shorten = "";
                    $this->errorMessage = 'Shortened URL not found in response.';
                }
            } else {
                $this->shorten = "";
                $this->errorMessage = 'Failed to shorten URL. Please try again.';
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the request
            $this->shorten = "";
            $this->errorMessage = 'An error occurred: ' . $e->getMessage();
        }
    }
}
