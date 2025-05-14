<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Client\PhotographUpload\Desc;
use Livewire\Component;

class Table extends Component
{

    // public function mount(){ dd('I am table'); }

    public function render()
    {
        return view('livewire.admin.product.table');
    }

    public function getGridData()
    {
        $dataList = Desc::simplePaginate(10);
        return $dataList->toArray();
    }
}
