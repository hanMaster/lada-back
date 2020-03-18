<?php

use App\DoctorSpec;
use Illuminate\Database\Seeder;

class DoctorSpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DoctorSpec::insert([
            'doctor_id' => 1,
            'spec_id' => 7,
            'min_time' => '10:00',
            'max_time' => '18:00',
            'days_off' => '[0,1]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 2,
            'spec_id' => 7,
            'min_time' => '11:00',
            'max_time' => '18:00',
            'days_off' => '[0,4]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 3,
            'spec_id' => 7,
            'min_time' => '12:00',
            'max_time' => '18:00',
            'days_off' => '[0]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 4,
            'spec_id' => 7,
            'min_time' => '8:00',
            'max_time' => '14:00',
            'days_off' => '[0,5]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 5,
            'spec_id' => 6,
            'min_time' => '11:00',
            'max_time' => '13:00',
            'days_off' => '[0]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 6,
            'spec_id' => 6,
            'min_time' => '13:00',
            'max_time' => '16:00',
            'days_off' => '[0,1,2]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 7,
            'spec_id' => 6,
            'min_time' => '16:00',
            'max_time' => '18:00',
            'days_off' => '[0,3]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 8,
            'spec_id' => 5,
            'min_time' => '9:00',
            'max_time' => '18:00',
            'days_off' => '[0,4]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 9,
            'spec_id' => 1,
            'min_time' => '10:00',
            'max_time' => '18:00',
            'days_off' => '[0]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 9,
            'spec_id' => 2,
            'min_time' => '8:00',
            'max_time' => '13:00',
            'days_off' => '[0,1,3]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 10,
            'spec_id' => 2,
            'min_time' => '13:00',
            'max_time' => '16:00',
            'days_off' => '[0,1]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 11,
            'spec_id' => 3,
            'min_time' => '8:30',
            'max_time' => '16:30',
            'days_off' => '[0]'
        ]);
        DoctorSpec::insert([
            'doctor_id' => 12,
            'spec_id' => 4,
            'min_time' => '10:00',
            'max_time' => '18:00',
            'days_off' => '[0,3,4]'
        ]);
    }
}
