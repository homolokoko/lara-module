<?php

namespace Modules\ComplianceAndProductSafety\Entities\HeatSealMachine;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ValueGiven extends Model
{
    use HasFactory;

    protected $table = 'heat_seal_machine_value_given';
    protected $fillable = ['root_id', 'time', 'pressure', 'temperature'];

    protected static function newFactory()
    {
        return \Modules\ComplianceAndProductSafety\Database\factories\HeatSealMachine\ValueGivenFactory::new();
    }
}
