<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    protected $fillable = [
        'name', 'address'
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

}
