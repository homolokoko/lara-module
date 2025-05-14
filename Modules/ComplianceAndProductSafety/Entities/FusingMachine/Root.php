<?php

namespace Modules\ComplianceAndProductSafety\Entities\FusingMachine;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Root extends Model
{
    use HasFactory;
    protected $table = 'fusing_machine';
    protected $fillable = ['user_id', 'locate_id', 'style_id', 'buyer_id', 'serial_number_id','status', 'comment'];

    public function user()
    {
        return $this
            ->belongsTo(
                \App\Models\User::class,
                'user_id'
            );
    }

    public function locate()
    {
        return $this
            ->belongsTo(
                \App\Models\Location::class,
                'locate_id'
            );
    }

    public function style()
    {
        return $this
            ->belongsTo(
                \App\Models\Style::class,
                'style_id'
            );
    }

    public function buyer()
    {
        return $this
            ->belongsTo(
                \App\Models\Buyer::class,
                'buyer_id'
            );
    }

    public function serialNumber()
    {
        return $this
            ->belongsTo(
                \App\Models\SerialNumber::class,
                'serial_number_id'
            );
    }

    public function given()
    {
        return $this
            ->hasOne(
                ValueGiven::class,
                'root_id'
            );
    }


    public function actual()
    {
        return $this
            ->hasOne(
                ValueActual::class,
                'root_id'
            );
    }

    protected static function newFactory()
    {
        return \Modules\ComplianceAndProductSafety\Database\factories\FusingMachine\RootFactory::new();
    }
}
