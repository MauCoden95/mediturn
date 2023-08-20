<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pacient;

class CountPacients extends Component
{
    public function render()
    {
        $pacients = Pacient::all();
        $pacients_count = count($pacients);

        return view('livewire.count-pacients',compact('pacients_count'));
    }
}
