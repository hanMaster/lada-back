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
            'spec'=>$event->spec->name,
            'phone'=>$event->phone,
            'start'=>$event->start,
            'fname'=>$event->fname,
            'mname'=>$event->mname,
            'sname'=>$event->sname
        ];
    }
}
