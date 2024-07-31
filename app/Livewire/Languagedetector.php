<?php

namespace App\Livewire;

use Livewire\Component;
use \DetectLanguage\DetectLanguage;
use App\Helpers\LanguageHelpers;

DetectLanguage::setApiKey("cb851797d3185ede4da01cc0acb4c42b");

class Languagedetector extends Component
{
    public $message = "你好";
    public $language, $confidence;

    public function render()
    {
        return view('livewire.languagedetector');
    }

    public function search()
    {
        $results = DetectLanguage::detect($this->message);
        
        if (!empty($results) && is_array($results)) {
            $this->language = LanguageHelpers::getLanguageName($results[0]->language);
            $this->confidence = $results[0]->confidence;
        } else {
            $this->language = 'Unknown';
            $this->confidence = 0;
        }
    }
}
