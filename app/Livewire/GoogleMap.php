<?php

namespace App\Livewire;

use Livewire\Component;

class GoogleMap extends Component
{
    public $apiKey;

    public function monunt() {
        $this->apiKey = config('services.googleMaps.key');
    }

    public function render()
    {
        $this->apiKey = config('services.googleMap.apiKey');
        return view('livewire.google-map',['apiKey' => $this->apiKey]);
    }
}
