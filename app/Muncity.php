<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muncity extends Model
{
    protected $table = 'muncities';
    protected $primaryKey = 'muncity_id';
    protected $fillable = ['province_id', 'district', 'code', 'description'];

    public function province()
    {
        return $this->belongsTo('App\Province', 'province_id', 'province_id');
    }

    public function barangays()
    {
        return $this->hasMany('App\Barangay', $this->primaryKey, $this->primaryKey);
    }
}
