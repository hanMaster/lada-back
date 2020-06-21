<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;

    protected $fillable = [
       'spec_id', 'code_1c' , 'name', 'duration', 'price'
    ];

}
