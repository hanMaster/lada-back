<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorService extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'doctor_id', 'service_id'
    ];

    protected $table = 'doctor_service';


}
