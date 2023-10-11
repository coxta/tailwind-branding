<?php

namespace App\Livewire;

use Livewire\Component;

class Dash extends Component
{

    public $brand = 'acme';
    public $brands = ['acme','hub','ouch'];

    public function setBrand($b) {
        $this->brand = $b;
    } 

    public function render()
    {
        return view('livewire.dash')->layout('layouts.guest'); 
    }
}
