<?php

namespace App\Models\Client\PhotographUpload;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportEntity extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'photograph_upload_report';
    protected $fillable = ['img','description','sort','colspan','desc_id'];

    public function desc()
    {
        return
            $this->belongsTo(Desc::class,'desc_id');
    }
}
