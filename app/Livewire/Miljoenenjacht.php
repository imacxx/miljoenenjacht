<?php

namespace App\Livewire;

use Livewire\Component;

class Miljoenenjacht extends Component
{
    public $amounts = [0.01, 0.05, 0.10, 0.50, 1, 2, 5, 10, 25, 50, 75, 100, 150, 200, 300, 400, 450, 500, 600, 700, 800, 900, 1000, 1150, 1300, 1500];
    public $removed = [];

    public function mount()
    {
        $this->removed = session()->get('removed', []);
    }

    public function removeAmount($amount)
    {
        $this->removed[] = $amount;
        session()->put('removed', $this->removed);
    }

    public function resetAmounts()
    {
        $this->removed = [];
        session()->forget('removed');
    }

    public function render()
    {
        return view('livewire.miljoenenjacht');
    }
}
