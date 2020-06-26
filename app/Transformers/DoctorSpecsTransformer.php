<?php

namespace App\Transformers;

use App\DoctorSpec;
use App\Service;
use App\Spec;
use League\Fractal\TransformerAbstract;

class DoctorSpecsTransformer extends TransformerAbstract
{
    protected $doctor_id;
    public function __construct($id)
    {
        $this->doctor_id = $id;
    }

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
    public function transform(Spec $spec)
    {
        $bh = DoctorSpec::where('doctor_id', $this->doctor_id)->where('spec_id', $spec->id)->first();
        return [
            'id'=>$spec->id,
            'name'=>$spec->name,
            'interval' => $spec->interval,
            'businessHours'=>$bh->businessHours
        ];
    }
}
