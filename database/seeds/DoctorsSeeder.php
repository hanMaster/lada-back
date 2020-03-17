<?php

use App\Doctor;
use Illuminate\Database\Seeder;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Гилибранд Л.А.',
            'min_time' => '10:00',
            'max_time' => '18:00',
            'days_off' => '[0,1]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Заузолкова М.Е.',
            'min_time' => '11:00',
            'max_time' => '18:00',
            'days_off' => '[0,4]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Платицына А.С',
            'min_time' => '12:00',
            'max_time' => '18:00',
            'days_off' => '[0]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Гусаров М.Ю.',
            'min_time' => '8:00',
            'max_time' => '14:00',
            'days_off' => '[0,5]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Литвинович Т.В.',
            'min_time' => '11:00',
            'max_time' => '13:00',
            'days_off' => '[0]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Никишин В.А.',
            'min_time' => '13:00',
            'max_time' => '16:00',
            'days_off' => '[0,1,2]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Еремина Ю.Б.',
            'min_time' => '16:00',
            'max_time' => '18:00',
            'days_off' => '[0,3]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Сауткин Д.В.',
            'min_time' => '9:00',
            'max_time' => '18:00',
            'days_off' => '[0,4]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Плюснина И.Н.',
            'min_time' => '10:00',
            'max_time' => '18:00',
            'days_off' => '[0]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Гурылева Е.Н.',
            'min_time' => '13:00',
            'max_time' => '16:00',
            'days_off' => '[0,1]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Плюснина И.Н.',
            'min_time' => '8:00',
            'max_time' => '13:00',
            'days_off' => '[0,1,3]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Мишенева Е.А.',
            'min_time' => '8:30',
            'max_time' => '16:30',
            'days_off' => '[0]'
        ]);
        Doctor::insert([
            'filial_id' => 1,
            'name' => 'Габова Е.В.',
            'min_time' => '10:00',
            'max_time' => '18:00',
            'days_off' => '[0,3,4]'
        ]);
    }
}
