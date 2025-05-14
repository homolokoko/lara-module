<?php

namespace App\Http\Livewire;

use App\Models\Auth\Buyer;
use Livewire\Component;
use Illuminate\Support\Str;

class DefectComponent extends Component
{
    public function render()
    {
        return view('livewire.defect-component');
    }

    public function save($name)
    {
        return Buyer::create(['name'=>Str::snake($name)]);
    }
}
