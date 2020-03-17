<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'filial_id', 'name', 'min_time', 'max_time', 'days_off',
    ];

    public function specs()
    {
        return $this->belongsToMany(Spec::class);
    }
}
