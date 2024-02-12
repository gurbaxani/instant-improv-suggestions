<?php

namespace App\Livewire;

use Livewire\Component;


class Prompt extends Component
{
    public $suggestion = "Give me a random...";

    public function object()
    {
        include('suggestions.php');
        $index = array_rand($objects);
        $this->suggestion = $objects[$index];
    }

    public function relationship()
    {
        include('suggestions.php');
        $index = array_rand($relationships);
        $this->suggestion = $relationships[$index];
    }

    public function location()
    {
        include('suggestions.php');
        $index = array_rand($locations);
        $this->suggestion = $locations[$index];
    }

    public function occupation()
    {
        include('suggestions.php');
        $index = array_rand($occupations);
        $this->suggestion = $occupations[$index];
    }

    public function alphabet()
    {
        $alphabet = range('A', 'Z');
        $index = array_rand($alphabet);
        $this->suggestion = $alphabet[$index];
    }

    public function phrase()
    {
        include('suggestions.php');
        $index = array_rand($phrases);
        $this->suggestion = $phrases[$index];
    }

    public function emotion()
    {
        include('suggestions.php');
        $index = array_rand($emotions);
        $this->suggestion = $emotions[$index];
    }

    public function genre()
    {
        include('suggestions.php');
        $index = array_rand($genres);
        $this->suggestion = $genres[$index];
    }

    public function quirk()
    {
        include('suggestions.php');
        $index = array_rand($quirks);
        $this->suggestion = $quirks[$index];
    }

    public function superpower()
    {
        include('suggestions.php');
        $index = array_rand($superpowers);
        $this->suggestion = $superpowers[$index];
    }

    public function render()
    {
        return view('livewire.prompt');
    }
}
