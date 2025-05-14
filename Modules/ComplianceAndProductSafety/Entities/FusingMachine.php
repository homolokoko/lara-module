<?php

namespace Modules\ComplianceAndProductSafety\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class fusing-machine extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\ComplianceAndProductSafety\Database\factories\FusingMachineFactory::new();
    }
}
