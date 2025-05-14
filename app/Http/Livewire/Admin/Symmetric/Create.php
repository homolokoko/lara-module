<?php

namespace App\Http\Livewire\Admin\Symmetric;

use App\Library;
use App\Models\ProductDesc;
use Livewire\Component;

class Create extends Component
{

    public function render()
    {
        return view('livewire.admin.symmetric.create');
    }

    public function getProductDesc()
    {
        $list = ProductDesc::get();
        return Library\GetValueTextList::convert($list);
    }
}
