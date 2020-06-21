<?php

namespace App\Transformers;

use App\Service;
use League\Fractal\TransformerAbstract;

class ServicesTransformer extends TransformerAbstract
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
     * @return array
     */
    public function transform(Service $service)
    {
        return [
            'id' => $service->id,
            'name' => $service->name,
            'code' => $service->code_1c,
            'duration' => $service->duration,
            'specId' => $service->spec_id,
            'price' => $service->price
        ];
    }
}
