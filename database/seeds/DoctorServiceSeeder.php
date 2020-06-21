<?php

use App\DoctorService;
use Illuminate\Database\Seeder;

class DoctorServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DoctorService::insert(['doctor_id' => 4, 'service_id' => 1]);
        DoctorService::insert(['doctor_id' => 4, 'service_id' => 2]);
        DoctorService::insert(['doctor_id' => 1, 'service_id' => 3]);
        DoctorService::insert(['doctor_id' => 2, 'service_id' => 3]);
        DoctorService::insert(['doctor_id' => 3, 'service_id' => 3]);
    }
}
