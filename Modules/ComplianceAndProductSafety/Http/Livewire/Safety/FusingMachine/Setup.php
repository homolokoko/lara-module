<?php

namespace Modules\ComplianceAndProductSafety\Http\Livewire\Safety\FusingMachine;

use Livewire\Component;
use App\Models\Buyer;
use App\Models\Style;
use App\Models\Location;
use App\Models\SerialNumber;
use Modules\ComplianceAndProductSafety\Entities;
use App\Library\GetValueTextList;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class Setup extends Component
{

    public array $buyers, $styles, $locations;

    public function mount()
    {

        $this->buyers = GetValueTextList::convert(Buyer::get());
        $this->styles = GetValueTextList::convert(Style::get());
        $this->locations = Location::get()->map(fn($item)=>['value'=>$item->id,'text'=>'Line '.$item->name])->toArray();

    }

    public function render()
    {
        return view('complianceandproductsafety::livewire.safety.fusing-machine.setup');
    }

    public function submit($filter)
    {

        $serial_number = SerialNumber::updateOrCreate(
            ['name' => Arr::get($filter,'serial_number')],
            ['name' => Arr::get($filter,'serial_number')]
        );

        $fusing_machine = Entities\FusingMachine\Root::create([
            'user_id' => Auth::user()->id,
            'locate_id' => Arr::get($filter,'location'),
            'style_id' => Arr::get($filter,'style.value'),
            'buyer_id' => Arr::get($filter,'buyer.value'),
            'serial_number_id' => $serial_number->id,
            'status' => Arr::get($filter,'status'),
            'comment' => Arr::get($filter,'comment',null)
        ]);

        $supplier_values = Entities\FusingMachine\ValueGiven::create([
            'root_id' => $fusing_machine->id,
            'time' => Arr::get($filter,'time.given'),
            'pressure' => Arr::get($filter,'pressure.given'),
            'temperature' => Arr::get($filter,'temperature.given'),
        ]);

        $production_values = Entities\FusingMachine\ValueActual::create([
            'root_id' => $fusing_machine->id,
            'time' => Arr::get($filter,'time.actual'),
            'pressure' => Arr::get($filter,'pressure.actual'),
            'temperature' => Arr::get($filter,'temperature.actual'),
        ]);

    }
}
