<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    protected $fillable = [
        'name', 'address'
    ];

    public function specs()
    {
        return $this->belongsToMany(Spec::class);
    }
}
