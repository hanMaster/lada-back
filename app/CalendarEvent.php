<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    protected $fillable = [
        'filial_id','doctor_id', 'service_id' , 'start', 'name', 'phone', 'payment_type'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

}
