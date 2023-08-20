<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Specialty;

class CountSpecialties extends Component
{
    public function render()
    {
        $specialties = Specialty::all();
        $specialties_count = count($specialties);


        return view('livewire.count-specialties', compact('specialties_count'));
    }
}
