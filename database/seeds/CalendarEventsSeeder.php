<?php

use App\CalendarEvent;
use Illuminate\Database\Seeder;

class CalendarEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CalendarEvent::insert([
            'filial_id' => 1,
            'doctor_id' => 9,
            'spec_id' => 1,
            'start' => '2020-03-19 13:00',
            'end' => '2020-03-19 13:30',
            'fname' => "Иван",
            'mname' => "Иванович",
            'sname' => "Иванов",
            'phone' => '89995554466',
            'record_type' => 1

        ]);
    }
}

