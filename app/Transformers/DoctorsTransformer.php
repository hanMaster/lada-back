<?php

namespace App\Transformers;

use App\CalendarEvent;
use App\Doctor;
use App\DoctorSpec;
use League\Fractal\TransformerAbstract;

class DoctorsTransformer extends TransformerAbstract
{
    protected $id;

    public function __construct($specId)
    {
        $this->id = $specId;
    }

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'events'
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
    public function transform(Doctor $doctor)
    {

        $ds = DoctorSpec::where('doctor_id', $doctor->id)->where('spec_id', $this->id)->first();
        return [
            'id' => $doctor->id,
            'name' => $doctor->name,
            'businessHours' => $ds->businessHours
        ];
    }

    public function includeEvents(Doctor $doctor)
    {
        $events = CalendarEvent::where('doctor_id', $doctor->id )->where('spec_id', $this->id)->get();
        return $this->collection($events, new EventsTransformer);

    }
}
