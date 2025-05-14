<?php

namespace App\Http\Livewire\Admin\Product;

use App\Library\UploadBase64;
use Livewire\Component;

class Create extends Component
{

    // public function mount(){ dd('I am create'); }

    public function render()
    {
        return view('livewire.admin.product.create');
    }

    public function uploadBase64($img)
    {
        $saveBase64 = new UploadBase64();
        $saveBase64->directory = 'product';
        $saveBase64->base64 = $img;
        $saveBase64->upload();
        return ['img_path'=>$saveBase64->file_name,'image_url'=>$saveBase64->getImageUrl(),'active'=>'0'];
    }

}
