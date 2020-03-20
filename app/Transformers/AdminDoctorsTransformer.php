<?php

namespace App\Transformers;

use App\Doctor;
use League\Fractal\TransformerAbstract;


class AdminDoctorsTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'specs'
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
        return [
            'id'=>$doctor->id,
            'name'=>$doctor->name
        ];
    }

    public function includeSpecs(Doctor $doctor){
        return $this->collection($doctor->specs, new DoctorSpecsTransformer($doctor->id));
    }
}
