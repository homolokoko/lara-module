<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Library\UploadBase64;
use App\Http\Controllers\Controller;

class UploaderController extends Controller
{
    //

    public function upload(Request $request)
    {
        $saveBase64 = new UploadBase64();
        $saveBase64->directory = 'product';
        $saveBase64->base64 = $request->base64;
        $saveBase64->upload();
        return response()->json(['img_path'=>$saveBase64->file_name,'image_url'=>$saveBase64->getImageUrl(),'active'=>'0']);
    }
}
