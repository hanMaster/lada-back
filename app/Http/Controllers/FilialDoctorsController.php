<?php

namespace App\Http\Controllers;

use App\Filial;
use App\Transformers\FilialTransformer;
use App\Transformers\AdminDoctorsTransformer;

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
}
