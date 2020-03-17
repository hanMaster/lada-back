<?php

namespace App\Http\Controllers;

use App\Filial;
use Illuminate\Http\Request;

class FilialDoctorsController extends Controller
{
    public function index(){
        return Filial::with('specs')::with('doctors')->get();
    }
}
