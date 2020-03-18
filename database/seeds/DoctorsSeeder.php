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
        Doctor::insert(['filial_id' => 1, 'name' => 'Гилибранд Л.А.']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Заузолкова М.Е.']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Платицына А.С']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Гусаров М.Ю.']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Литвинович Т.В.']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Никишин В.А.',]);
        Doctor::insert(['filial_id' => 1, 'name' => 'Еремина Ю.Б.']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Сауткин Д.В.']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Плюснина И.Н.']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Гурылева Е.Н.']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Мишенева Е.А.']);
        Doctor::insert(['filial_id' => 1, 'name' => 'Габова Е.В.',]);
    }
}
