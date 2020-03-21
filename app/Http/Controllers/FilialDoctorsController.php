<?php

namespace App\Http\Controllers;

use App\DoctorSpec;
use App\Filial;
use App\Transformers\FilialTransformer;
use App\Transformers\AdminDoctorsTransformer;
use Illuminate\Http\Request;


class FilialDoctorsController extends Controller
{


    public function index(){
        $filials = Filial::all();

        return fractal()
            ->collection($filials)
            ->transformWith(new FilialTransformer)
            ->toArray();
    }

    public function filial(Filial $filial)
    {
        return fractal()
            ->item($filial)
            ->transformWith(new FilialTransformer)
            ->toArray();
    }

    public function doctors(Filial $filial){
        return fractal()
            ->collection($filial->doctors)
            ->transformWith(new AdminDoctorsTransformer)
            ->toArray();
    }

    public function storeSchedule(Request $request){
        $ds = DoctorSpec::where('doctor_id', $request->doctorId)->where('spec_id', $request->specId)->first();

        $ds->businessHours = json_encode($request->businessHours);

        $ds->save();

        return response()->json(200);
    }
}
