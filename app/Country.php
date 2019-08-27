<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey = 'country_id';
    protected $fillable = ['code', 'name'];

    public function regions()
    {
        return $this->hasMany('App\Region', 'country_id', 'country_id');
    }
}
