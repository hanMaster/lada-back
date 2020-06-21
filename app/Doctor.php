<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'filial_id', 'name'
    ];

    public function specs()
    {
        return $this->belongsToMany(Spec::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
