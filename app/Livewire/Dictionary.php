<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Dictionary extends Component

{
    public $word = "example";
    
    public $definition,$defintionsInLoop= [];
    public $errorMessage = '';
    public function render()
    {
        return view('livewire.dictionary');
    }
    public function search(){
        $this->definition = null; 
        $url = "https://api.dictionaryapi.dev/api/v2/entries/en/".$this->word;
        $response = Http::get($url);
        if ($response->failed()) {
            $this->errorMessage = "请求失败";
            return;
        }

        $result = $response->json();
        $wordArray = $result[0]["meanings"];
        // 2 items, one array for noun, one array for verb
        foreach($wordArray as $partofSpeech ){ //the one specifically for noun
            
            $defintionsInLoop=$partofSpeech['definitions'];
            
            for($i = 0; $i < count($defintionsInLoop); $i++){
               

                $this->definition[]=$defintionsInLoop[$i]['definition'];
            }
            
        }   
       

    }

}
