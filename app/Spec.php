<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function doctors(){
        return $this->belongsToMany(Doctor::class);
    }
}
