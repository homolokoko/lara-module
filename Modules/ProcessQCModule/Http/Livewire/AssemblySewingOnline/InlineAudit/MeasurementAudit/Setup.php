<?php

namespace Modules\ProcessQCModule\Http\Livewire\AssemblySewingOnline\InlineAudit\MeasurementAudit;

use Livewire\Component;
use App\Library\GetValueTextList;
use App\Models\Size;

class Setup extends Component
{

    public function render()
    {
        return view('processqcmodule::livewire.assembly-sewing-online.inline-audit.measurement-audit.setup');
    }

    public function getData()
    {
        $sizes = GetValueTextList::convert(Size::get());
        return ['sizes'=>$sizes];
    }
}
