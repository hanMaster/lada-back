<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'filial_id', 'name'
    ];

    public function specs()
    {
        return $this->belongsToMany(Spec::class);
    }

    public function events(){
        return $this->hasMany(CalendarEvent::class);
    }
}
