<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Place;

class PreferencePopup extends Component
{
    public $showPopup = false;
    public $preferredPlaces = [];
    
    public function mount()
    {
        $this->showPopup = !session()->has('place_preference');
        if (session()->has('place_preference')) {
            $this->loadPreferredPlaces();
        }
    }

    public function setPreference($category)
    {
        session(['place_preference' => $category]);
        $this->loadPreferredPlaces();
        $this->showPopup = false;
        $this->dispatch('notify', [
            'message' => "Showing recommended places for {$category} category",
            'type' => 'success'
        ]);
    }

    private function loadPreferredPlaces()
    {
        $this->preferredPlaces = Place::where('category', session('place_preference'))
            ->where('status', 'accepted')
            ->inRandomOrder()
            ->limit(6)
            ->get();
    }

    public function clearPreferences()
    {
        session()->forget('place_preference');
        $this->preferredPlaces = [];
        $this->dispatch('notify', [
            'message' => 'Preferences cleared successfully',
            'type' => 'info'
        ]);
    }

    public function openPopup()
    {
        $this->showPopup = true;
    }

    public function render()
    {
        return view('livewire.preference-popup');
    }
}