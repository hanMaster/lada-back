<?php

namespace App\Transformers;

use App\Spec;
use League\Fractal\TransformerAbstract;

class SpecTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'doctors'
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
     * @param Spec $spec
     * @return array
     */
    public function transform(Spec $spec)
    {
        return [
            'id'=>$spec->id,
            'specName'=>$spec->name
        ];
    }

    public function includeDoctors(Spec $spec)
    {
        return $this->collection($spec->doctors, new DoctorsTransformer($spec->id));

    }
}
