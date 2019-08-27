<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $primaryKey = 'province_id';
    protected $fillable = ['region_id', 'code', 'description'];

    public function region()
    {
        return $this->belongsTo('App\Region', 'region_id', 'region_id');
    }
}
