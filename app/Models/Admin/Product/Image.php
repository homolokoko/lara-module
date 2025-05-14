<?php

namespace App\Models\Admin\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'product_image';
    protected $fillable = ['product_id','img_path', 'active'];
    protected $appends = ['img_url'];

    function getImgUrlAttribute()
    {
        return Storage::disk('tmp')->url('product/'.$this->img_path);
    }
}
