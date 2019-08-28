<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $primaryKey = 'country_id';
    protected $fillable = ['code', 'name'];

    public function regions()
    {
        return $this->hasMany('App\Region', $this->primaryKey, $this->primaryKey);
    }
}
