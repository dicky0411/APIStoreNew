<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Lyrics extends Component
{
    public $artist, $song;
    public $lyrics;
    public $errorMessage ="";
    public function render()
    {
        return view('livewire.lyrics');
    }
    public function search(){
        $this->errorMessage = "";
        $url = "https://api.lyrics.ovh/v1/".$this->artist."/".$this->song;
        $response = Http::get($url);
        if ($response->failed()){
            $this->errorMessage ="请求失败/Check inputs again";
            return;
        }
        $result = $response->json();
        $this->lyrics = $result["lyrics"];
    }
}
