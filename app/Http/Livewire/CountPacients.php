<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pacient;

class CountPacients extends Component
{
    protected $listeners = ['render' => 'render'];
    
    public function render()
    {
        $pacients = Pacient::all();
        $pacients_count = $pacients->count();

        return view('livewire.count-pacients',compact('pacients_count'));
    }

    
}
