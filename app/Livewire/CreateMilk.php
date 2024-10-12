<?php

namespace App\Livewire;

use Livewire\Component;

class CreateMilk extends Component
{
    public $amount;

    public $storageType = 'fridge';

    public function render()
    {
        return view('livewire.create-milk');
    }

    public function save()
    {
        $this->validate([
            'amount' => 'required',
            'storageType' => 'required|in:fridge,frozen,thawed',
        ]);

        \App\Models\Milk::create([
            'amount' => $this->amount,
            'storage_type' => $this->storageType,
        ]);

        return $this->redirect('/dashboard');
    }
}
