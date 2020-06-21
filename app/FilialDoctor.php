<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilialDoctor extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'doctor_id', 'filial_id'
    ];

    protected $table = 'doctor_filial';
}
