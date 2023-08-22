<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pacient;

class DataPacient extends Component
{
    public function render($id)
    {
        $pacient = Pacient::find($id);

        return view('livewire.data-pacient',compact('pacient'));
    }
}
