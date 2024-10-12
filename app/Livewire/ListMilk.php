<?php

namespace App\Livewire;

use App\Models\Milk;
use Livewire\Component;

class ListMilk extends Component
{
    public function render()
    {
        return view('livewire.list-milk', [
            'milks' => \App\Models\Milk::all(),
        ]);
    }
}
