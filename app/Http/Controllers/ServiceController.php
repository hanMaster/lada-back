<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\DoctorService;
use App\Filial;
use App\Http\Requests\AssignRequest;
use App\Http\Requests\ServiceRequest;
use App\Service;
use App\Transformers\AdminDoctorsTransformer;
use App\Transformers\AdminServicesTransformer;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('name')->get();
        return fractal()
            ->collection($services)
            ->transformWith(new AdminServicesTransformer)
            ->toArray();
    }

    public function store(ServiceRequest $request)
    {
        $service = new Service();
        $service->name = $request->serviceName;
        $service->spec_id = $request->specId;

        if (isset($request->servicePrice)) {
            $service->price = $request->servicePrice;
        }

        if (isset($request->serviceDuration)) {
            $service->duration = $request->serviceDuration;
        }

        if (isset($request->serviceCode)) {
            $service->code_1c = $request->serviceCode;
        }

        $service->save();

        return fractal()
            ->item($service)
            ->transformWith(new AdminServicesTransformer)
            ->toArray();
    }

    public function assignServiceToDoctors(AssignRequest $request)
    {
        $services = DoctorService::where('service_id', $request->serviceId)->whereNotIn('doctor_id', $request->doctors)->delete();

        foreach ($request->doctors as $docId) {
            $service = DoctorService::where('service_id', $request->serviceId)->where('doctor_id', $docId)->count();
            if ($service == 0) {
                DoctorService::insert(['doctor_id' => $docId, 'service_id' => $request->serviceId]);
            }
        }

        return 200;

    }
}
