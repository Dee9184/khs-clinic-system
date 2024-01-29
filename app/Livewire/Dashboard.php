<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PatientQueue;

class Dashboard extends Component
{
    public $data;

    public function mount()
    {
        $patientQueue = PatientQueue::all();
        $this->data = $patientQueue;
    }
    
    public function render()
    {
        return view('livewire.dashboard');
    } 
}
