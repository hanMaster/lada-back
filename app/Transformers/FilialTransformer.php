<?php

namespace App\Transformers;

use App\Filial;
use League\Fractal\TransformerAbstract;

class FilialTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'doctors'
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Filial $filial)
    {
        return [
            'id'=> $filial->id,
            'name' => $filial->name,
            'address'=>$filial->address
        ];
    }

    public function includeDoctors(Filial $filial)
    {
        return $this->collection($filial->doctors, new DoctorsTransformer);

    }
}
