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
        Doctor::insert(['name' => 'Гилибранд Л.А.']);  //1
        Doctor::insert(['name' => 'Заузолкова М.Е.']); //2
        Doctor::insert(['name' => 'Платицына А.С']);   //3
        Doctor::insert(['name' => 'Гусаров М.Ю.']);    //4
        Doctor::insert(['name' => 'Литвинович Т.В.']); //5
        Doctor::insert(['name' => 'Никишин В.А.']);    //6
        Doctor::insert(['name' => 'Еремина Ю.Б.']);    //7
        Doctor::insert(['name' => 'Сауткин Д.В.']);    //8
        Doctor::insert(['name' => 'Габова Е.В.']);     //9
        Doctor::insert(['name' => 'Плюснина И.Н.']);   //10
        Doctor::insert(['name' => 'Гурылева Е.Н.']);   //11
        Doctor::insert(['name' => 'Мишенева Е.А.']);   //12
        Doctor::insert(['name' => 'Фимина О.Т.']);     //13
        Doctor::insert(['name' => 'Ткач М.В.']);       //14
    }
}
