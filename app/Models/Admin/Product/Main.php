<?php

namespace App\Models\Admin\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Main extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'product';
    protected $fillable = ['name','price','promo','qty'];
    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function image()
    {
        return
            $this->hasOne(Image::class,'product_id')->where('active',true);
    }

    public function images()
    {
        return
            $this->hasMany(Image::class,'product_id');
    }
}
