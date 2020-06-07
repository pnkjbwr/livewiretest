<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $firstno = 0;
    public $secondno = 0;
    public $result = 0;

    public function plus()
    {
        // dd('12122');
        $this->result = $this->firstno + $this->secondno ;
    }

    public function minus()
    {
        $this->result = $this->firstno - $this->secondno;
    }

    public function resetfields()
    {
        $this->result = 0;
        $this->firstno = 0;
        $this->secondno = 0;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
