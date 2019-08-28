<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $table = 'barangays';
    protected $primaryKey = 'barangay_id';
    protected $fillable = ['muncity_id', 'code', 'description'];

    public function muncity()
    {
        return $this->belongsTo('App\Muncity', 'muncity_id', 'muncity_id');
    }
}
