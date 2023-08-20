<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor;

class CountDoctors extends Component
{
    public function render()
    {
        $doctors = Doctor::all();
        $doctors_count = count($doctors);


        return view('livewire.count-doctors',compact('doctors_count'));
    }
}
