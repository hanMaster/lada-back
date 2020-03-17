<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function specs(){
      return $this->belongsToMany('App\Specs');
    }
}
