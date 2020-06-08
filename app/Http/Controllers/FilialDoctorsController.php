<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\DoctorSpec;
use App\Filial;
use App\Transformers\FilialTransformer;
use App\Transformers\AdminDoctorsTransformer;
use Illuminate\Http\Request;


class FilialDoctorsController extends Controller
{


    public function index(){
        return Filial::all();
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

    public function store(Filial $filial, Request $request){
        $request->validate([
            'name' => 'required|string|min:2|max:255',
        ]);

        $doctor = new Doctor();
        $doctor->filial_id = $filial->id;
        $doctor->name = $request->name;
        $doctor->save();
        return response()->json($doctor, 200);
    }

    public function updateDoctor(Doctor $doctor, Request $request){
        $doctor->status = $request->status;
        $doctor->save();
        return response()->json($doctor, 200);
    }
}
