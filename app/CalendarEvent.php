<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    protected $fillable = [
        'doctor_id', 'start', 'end', 'fname', 'mname', 'sname', 'phone', 'record_type',
    ];
}
