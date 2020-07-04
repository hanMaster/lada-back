<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CalendarEvent extends Model
{
    use SoftDeletes;
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
