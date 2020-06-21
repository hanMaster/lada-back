<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecRequest;
use App\Http\Requests\UpdateSpecRequest;
use App\Spec;
use App\Transformers\AdminSpecsTransformer;

class SpecController extends Controller
{

    public function index()
    {
        $services = Spec::orderBy('name')->get();
        return fractal()
            ->collection($services)
            ->transformWith(new AdminSpecsTransformer)
            ->toArray();
    }

    public function store(SpecRequest $request)
    {
        $spec = new Spec();
        $spec->name = $request->name;
        $spec->save();

        $fs = new FilialSpec();
        $fs->filial_id = $request->filialId;
        $fs->spec_id = $spec->id;
        $fs->save();

        return response()->json($spec, 200);
    }

    public function update(UpdateSpecRequest $request, Spec $spec)
    {
        $spec->name = $request->name;
        $spec->save();
        return response()->json($spec, 200);
    }
}
