<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use App\Filial;
use App\Http\Requests\EventRequest;
use App\Transformers\RecordsTransformer;

class EventController extends Controller
{
    public function index(Filial $filial)
    {
        $records = CalendarEvent::where('filial_id', $filial->id)->get();

        return fractal()
            ->collection($records)
            ->transformWith(new RecordsTransformer)
            ->toArray();

    }

    public function store(EventRequest $request)
    {
        return CalendarEvent::create([
            'filial_id' => $request['filialId'],
            'doctor_id' => $request['doctorId'],
            'service_id' => $request['serviceId'],
            'start' => $request['start'],
            'name' => $request['name'],
            'phone' => $request['phone'],
            'payment_type' => $request['paymentType'],
        ]);
    }

    public function destroy(CalendarEvent $event)
    {
        try {
            $event->delete();
            return response()->json('Successful deleted', 200);
        } catch (\Exception $exception) {
            return response()->json($exception, 500);
        }
    }
}
