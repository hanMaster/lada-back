<?php

namespace App\Transformers;

use App\Doctor;
use App\DoctorSpec;
use League\Fractal\TransformerAbstract;

class DoctorsTransformer extends TransformerAbstract
{
    protected $id;
    protected $min_time;
    protected $max_time;
    protected $days_off;


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

        $ds = DoctorSpec::where('spec_id', $this->id)->first();
        return [
            'id' => $doctor->id,
            'name' => $doctor->name,
            'minTime' => $ds->min_time,
            'maxTime' => $ds->max_time,
            'hidden' => json_decode($ds->days_off)
        ];
    }

    public function includeEvents(Doctor $doctor)
    {
        return $this->collection($doctor->events, new EventsTransformer);

    }
}
