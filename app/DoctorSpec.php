<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DoctorSpec extends Pivot
{
    public $timestamps = false;

    protected $fillable = [
        'doctor_id', 'spec_id', 'businessHours'
    ];
}
