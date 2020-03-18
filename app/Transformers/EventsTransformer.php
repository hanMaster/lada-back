<?php

namespace App\Transformers;

use App\CalendarEvent;
use League\Fractal\TransformerAbstract;

class EventsTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
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
     * @param CalendarEvent $event
     * @return array
     */
    public function transform(CalendarEvent $event)
    {
        return [
            'id'=>$event->id,
            'doctorId'=>$event->doctor_id,
            'start'=>$event->start,
            'end'=>$event->end
        ];
    }
}
