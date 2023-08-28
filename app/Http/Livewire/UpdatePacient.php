<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pacient;

class UpdatePacient extends Component
{
    public function render()
    {
        return view('livewire.update-pacient');
    }

    public function update($id){
        
    }
}
