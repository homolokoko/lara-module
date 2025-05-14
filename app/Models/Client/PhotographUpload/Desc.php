<?php

namespace App\Models\Client\PhotographUpload;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desc extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'photogragh_upload_desc';
    protected $fillable = ['name'];

    protected function getNameAttribute($val)
    {
        return Str::headline($val);
    }

}
