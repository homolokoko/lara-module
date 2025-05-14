<?php

namespace Modules\ComplianceAndProductSafety\Http\Livewire\Safety\HeatSealMachine;

use App\Models;
use App\Library;
use Livewire\Component;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Modules\ComplianceAndProductSafety\Entities;

class Inspector extends Component
{
    public $buyers, $styles, $locations;

    public function mount()
    {
        $this->buyers = Library\GetValueTextList::convert(Models\Buyer::get());
        $this->styles = Library\GetValueTextList::convert(Models\Style::get());
        $this->locations = Library\GetValueTextList::convert(Models\Location::get());
    }

    public function render()
    {
        return view('complianceandproductsafety::livewire.safety.heat-seal-machine.inspector');
    }

    public function submit($filter)
    {

        $serial_number = Models\SerialNumber::updateOrCreate(
            ['name' => Arr::get($filter,'serial_number')],
            ['name' => Arr::get($filter,'serial_number')]
        );

        $heat_seal_machine = Entities\HeatSealMachine\Root::create([
            'user_id' => Auth::user()->id,
            'locate_id' => Arr::get($filter,'location'),
            'style_id' => Arr::get($filter,'style.value'),
            'buyer_id' => Arr::get($filter,'buyer.value'),
            'serial_number_id' => $serial_number->id,
            'status' => Arr::get($filter,'status'),
            'comment' => Arr::get($filter,'comment',null)
        ]);

        $supplier_values = Entities\HeatSealMachine\ValueGiven::create([
            'root_id' => $heat_seal_machine->id,
            'time' => Arr::get($filter,'time.given'),
            'pressure' => Arr::get($filter,'pressure.given'),
            'temperature' => Arr::get($filter,'temperature.given'),
        ]);

        $production_values = Entities\HeatSealMachine\ValueActual::create([
            'root_id' => $heat_seal_machine->id,
            'time' => Arr::get($filter,'time.actual'),
            'pressure' => Arr::get($filter,'pressure.actual'),
            'temperature' => Arr::get($filter,'temperature.actual'),
        ]);

    }
}
