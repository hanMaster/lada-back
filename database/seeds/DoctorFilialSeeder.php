<?php

use App\DoctorFilial;
use Illuminate\Database\Seeder;

class DoctorFilialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 1]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 2]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 3]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 4]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 5]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 6]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 7]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 8]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 9]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 10]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 11]);
        DoctorFilial::insert(['filial_id' => 1, 'doctor_id' => 12]);
        DoctorFilial::insert(['filial_id' => 2, 'doctor_id' => 10]);
        DoctorFilial::insert(['filial_id' => 2, 'doctor_id' => 13]);
        DoctorFilial::insert(['filial_id' => 2, 'doctor_id' => 14]);
    }
}
