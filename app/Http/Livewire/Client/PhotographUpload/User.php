<?php

namespace App\Http\Livewire\Client\PhotographUpload;

use Livewire\Component;
use App\Library\UploadBase64Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Client\PhotographUpload;

use Illuminate\Support\Arr;

class User extends Component
{
    public function render()
    {
        return view('livewire.client.photograph-upload.user');
    }

    public function loadPhotograph()
    {
        return PhotographUpload\UserEntity::where('user_id',Auth::user()->id)->get()->toArray();
    }


    public function removePhotograph($id)
    {
        PhotographUpload\UserEntity::where('id',$id)->delete();
    }

    public function uploadBase64($data64)
    {
        $location = 'take_photo';
        $file_path = UploadBase64Image::uploadInspectionPhotograph($data64,$location);
        Arr::set($uploadImage,'user_id',Auth::user()->id);
        Arr::set($uploadImage,'location','inspection');
        Arr::set($uploadImage,'file_path',$file_path);
        return PhotographUpload\UserEntity::create($uploadImage)->toArray();
    }
}
