<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Urlshortener extends Component
{
    public $link = "";
    public $errorMessage = "";
    public $shorten = "";

    public function render()
    {
        return view('livewire.urlshortener');
    }

    public function search()
    {
        $this->errorMessage = "";
        $this->shorten = "";

        // Validate input
        if (empty($this->link)) {
            $this->errorMessage = 'Please enter a valid URL.';
            return;
        }

        // Ensure the URL has a protocol
        $fullUrl = $this->ensureProtocol($this->link);

        // Construct the URL with query parameters
        $apiUrl = "https://ulvis.net/api.php?url=" . urlencode($fullUrl);

        try {
            // Send the HTTP request
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'User-Agent' => 'APIStoreNew/1.0'
            ])->timeout(10)->get($apiUrl);

            // Log the full response for debugging
            Log::info('URL Shortener Response', [
                'url' => $apiUrl,
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            // Check if the response is successful
            if ($response->successful()) {
                // Get the response body
                $result = $response->body();

                // Trim any whitespace
                $result = trim($result);

                // Validate the response
                if ($this->isValidUrl($result)) {
                    $this->shorten = $result;
                    $this->errorMessage = "";
                } else {
                    $this->errorMessage = 'Invalid shortened URL received.';
                    Log::warning('Invalid URL received', ['url' => $result]);
                }
            } else {
                $this->errorMessage = 'Failed to shorten URL. Please try again.';
                Log::error('URL Shortening Failed', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the request
            $this->errorMessage = 'An error occurred. Please try again later.';
            Log::error('URL Shortening Exception', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
        }
    }

    // Ensure the URL has a protocol
    private function ensureProtocol($url)
    {
        // Remove any leading/trailing whitespace
        $url = trim($url);

        // Check if the URL already starts with a protocol
        if (!preg_match('/^https?:\/\//i', $url)) {
            // If not, prepend https://
            $url = 'https://' . $url;
        }

        return $url;
    }

    // Validate if the returned string looks like a valid URL
    private function isValidUrl($url)
    {
        // Check for basic URL structure
        $isValid = filter_var($url, FILTER_VALIDATE_URL) !== false;
        
        // Additional checks
        $isValid = $isValid && (
            strpos($url, 'http://') === 0 || 
            strpos($url, 'https://') === 0
        );

        return $isValid;
    }
}
