<?php

namespace App\Models\Admin\Defect;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'defects_translations';
}
