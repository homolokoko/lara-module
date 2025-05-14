<?php
namespace App\Library;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class UploadBase64{

    public string $base64;
    public string $directory;
    public string $file_name;

    public function upload()
    {
        if (preg_match('/^data:image\/(\w+);base64,/', $this->base64, $type)) {
            $src = substr($this->base64, strpos($this->base64, ',') + 1);
            $type = strtolower($type[1]);
            $data = base64_decode($src);
            // $img = Image::make($data)->resize(483, 366);

            if ($data === false)
                dd('Base64 decode failed.');

            $filePath = Str::random() . '.png';

            if (Storage::disk('tmp')->put($this->directory.'/'.$filePath, $data))
                return $this->file_name = $filePath;
            else
                dd("Failed to save image.");
        }
    }

    public function getImageUrl(){ return Storage::disk('tmp')->url($this->directory.'/'.$this->file_name); }
}
