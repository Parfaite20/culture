<?php

namespace App\Http\Livewire\Auteur;

use Livewire\Component;

class AuteurDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.auteur.auteur-dashboard-component')->layout('layouts.templateUser');
    }
}
