<?php

namespace App\Models\Admin\Defect;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Header extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'defects';
    protected $hiddens = ['created_at','updated_at','deleted_at'];

    public function translations()
    {
        return
            $this->hasMany(Translation::class,'defect_id');
    }
}
