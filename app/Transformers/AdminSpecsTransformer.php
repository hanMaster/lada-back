<?php

namespace App\Transformers;

use App\Spec;
use League\Fractal\TransformerAbstract;

class AdminSpecsTransformer extends TransformerAbstract
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
    public function transform(Spec $spec)
    {
        return [
            'id'=>$spec->id,
            'specName'=>$spec->name
        ];
    }
}
