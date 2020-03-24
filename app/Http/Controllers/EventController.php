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
            'spec_id' => $request['specId'],
            'start' => $request['start'],
            'end' => $request['end'],
            'fname' => $request['fname'],
            'mname' => $request['mname'],
            'sname' => $request['sname'],
            'phone' => $request['phone'],
            'record_type' => $request['type']
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
