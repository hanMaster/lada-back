<?php

namespace App\Transformers;

use App\Service;
use League\Fractal\TransformerAbstract;

class AdminServicesTransformer extends TransformerAbstract
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
            'duration' => $service->duration,
            'code' => $service->code_1c,
            'price' => $service->price,
            'specId' => $service->spec_id
        ];
    }
}
