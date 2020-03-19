<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    protected $fillable = [
        'filial_id','doctor_id', 'spec_id', 'start', 'end', 'fname', 'mname', 'sname', 'phone', 'record_type',
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function spec(){
        return $this->belongsTo(Spec::class);
    }

}
