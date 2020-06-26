<?php

namespace App\Transformers;

use App\CalendarEvent;
use League\Fractal\TransformerAbstract;

class RecordsTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [

    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(CalendarEvent $event)
    {
        return [
            'id'=>$event->id,
            'doctor'=>$event->doctor->name,
            'doctorId' => $event->doctor->id,
            'service' => $event->service->name,
            'duration' => $event->service->duration,
            'phone'=>$event->phone,
            'start'=>$event->start,
            'name'=>$event->name,
        ];
    }
}
