<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pacient;

class ShowPacients extends Component
{   
    protected $listeners = ['render' => 'render'];
    public function render()
    {
        $pacients = Pacient::all();

        return view('livewire.show-pacients', compact('pacients'));
    }
}
