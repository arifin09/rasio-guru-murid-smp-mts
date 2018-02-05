<?php

namespace Bantenprov\RasioGMSmpMts\Models\Bantenprov\RasioGMSmpMts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regency extends Model
{

    protected $table = 'regencies';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('province_id', 'name');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\RasioGMSmpMts\Models\Bantenprov\RasioGMSmpMts\Province','id','province_id');
    }

}

