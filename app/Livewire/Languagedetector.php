<?php

namespace App\Livewire;

use Livewire\Component;
use \DetectLanguage\DetectLanguage;
use App\Helpers\LanguageHelper;

DetectLanguage::setApiKey("cb851797d3185ede4da01cc0acb4c42b");

class Languagedetector extends Component
{
    public $message ;
    public $language, $confidence;

    public function render()
    {
        return view('livewire.languagedetector');
    }

    public function search()
    {
        $this->errorMessage = "";
        $results = DetectLanguage::detect($this->message);
        
        if (!empty($results) && is_array($results)) {
            $this->language = LanguageHelper::getLanguageName($results[0]->language);
            $this->confidence = $results[0]->confidence;
        } else {
            $this->language = 'Unknown';
            $this->confidence = 0;
        }
    }
}
