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
        DoctorSpec::insert(['doctor_id' => 1, 'spec_id' => 7]);
        DoctorSpec::insert(['doctor_id' => 2, 'spec_id' => 7]);
        DoctorSpec::insert(['doctor_id' => 3, 'spec_id' => 7]);
        DoctorSpec::insert(['doctor_id' => 4, 'spec_id' => 7]);
        DoctorSpec::insert(['doctor_id' => 5, 'spec_id' => 6]);
        DoctorSpec::insert(['doctor_id' => 6, 'spec_id' => 6]);
        DoctorSpec::insert(['doctor_id' => 7, 'spec_id' => 6]);
        DoctorSpec::insert(['doctor_id' => 8, 'spec_id' => 5]);
        DoctorSpec::insert(['doctor_id' => 9, 'spec_id' => 1]);
        DoctorSpec::insert(['doctor_id' => 9, 'spec_id' => 2]);
        DoctorSpec::insert(['doctor_id' => 10, 'spec_id' => 2]);
        DoctorSpec::insert(['doctor_id' => 11, 'spec_id' => 2]);
        DoctorSpec::insert(['doctor_id' => 12, 'spec_id' => 3]);
        DoctorSpec::insert(['doctor_id' => 13, 'spec_id' => 4]);
    }
}
