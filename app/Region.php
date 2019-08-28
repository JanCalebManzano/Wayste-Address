<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';
    protected $primaryKey = 'region_id';
    protected $fillable = ['country_id', 'code', 'description'];

    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id', 'country_id');
    }

    public function provinces()
    {
        return $this->hasMany('App\Province', $this->primaryKey, $this->primaryKey);
    }
}
