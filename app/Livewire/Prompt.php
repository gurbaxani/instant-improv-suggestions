<?php

namespace App\Livewire;

use Livewire\Component;

class Prompt extends Component
{
    public $suggestion = "Give me a random...";

    public function object()
    {
        $this->suggestion = "Mumbai";
    }

    public function relationship()
    {
        $this->suggestion = "Mumbai";
    }

    public function location()
    {
        $this->suggestion = "Mumbai";
    }

    public function occupation()
    {
        $this->suggestion = "Mumbai";
    }

    public function alphabet()
    {
        $range = range('A', 'Z');
        $index = array_rand($range);
        $this->suggestion = $range[$index];
    }

    public function phrase()
    {
        $this->suggestion = "Mumbai";
    }

    public function emotion()
    {
        $this->suggestion = "Mumbai";
    }

    public function genre()
    {
        $this->suggestion = "Mumbai";
    }

    public function quirk()
    {
        $this->suggestion = "Mumbai";
    }

    public function superpower()
    {
        $this->suggestion = "Mumbai";
    }

    public function render()
    {
        return view('livewire.prompt');
    }
}
