<?php

namespace Modules\ComplianceAndProductSafety\Entities\FusingMachine;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ValueActual extends Model
{
    use HasFactory;
    protected $table = 'fusing_machine_value_actual';
    protected $fillable = ['root_id', 'time', 'pressure', 'temperature'];

    protected static function newFactory()
    {
        return \Modules\ComplianceAndProductSafety\Database\factories\FusingMachine\ValueActualFactory::new();
    }
}
