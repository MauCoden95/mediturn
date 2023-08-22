<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pacient;


class CreatePacient extends Component
{
    public $name;
    public $dni;
    public $address;
    public $birth_date;
    public $phone1;
    public $phone2;
    public $health_insurance;
    public $numbre_health_insurance;
    public $history;

    public function save(){
        Pacient::create([
            'name' => $this->name,
            'dni' => $this->dni,
            'address' => $this->address,
            'birth_date' => $this->birth_date,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'health_insurance' => $this->health_insurance,
            'numbre_health_insurance' => $this->numbre_health_insurance,
            'history' => $this->history
        ]);
       

        


        $this->emit('render');
    }

    public function render()
    {
        

        return view('livewire.create-pacient');
    }
}
