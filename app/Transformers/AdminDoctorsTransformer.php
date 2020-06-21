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
        'specs', 'services'
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
     * @param Doctor $doctor
     * @return array
     */
    public function transform(Doctor $doctor)
    {
        return [
            'id'=>$doctor->id,
            'name'=>$doctor->name,
            'status'=>$doctor->status
        ];
    }

    public function includeSpecs(Doctor $doctor){
        return $this->collection($doctor->specs, new DoctorSpecsTransformer($doctor->id));
    }

    public function includeServices(Doctor $doctor){
        return $this->collection($doctor->services, new ServicesTransformer);
    }
}
