<?php

namespace App\Models\Client\PhotographUpload;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserEntity extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'photograph_upload_user';
    protected $fillable = ['user_id','location','file_path'];

    public $appends = [
        'image_lcl'
    ];

    public function getImageLclAttribute()
    {
        return Storage::disk('inspection')->url($this->file_path);
    }
}
