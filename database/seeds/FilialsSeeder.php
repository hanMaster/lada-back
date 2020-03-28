<?php

use App\Filial;
use Illuminate\Database\Seeder;

class FilialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filial::insert([
            'name' => 'МО Инвитро',
            'address' => 'г.Сыктывкар, ул. Орджоникидзе, д. 33/45'
        ]);
        Filial::insert([
            'name' => 'МО Инвитро',
            'address' => 'г.Сыктывкар, ул.Первомайская, д. 62'
        ]);
        Filial::insert([
            'name' => 'МО Эжва',
            'address' => 'г.Сыктывкар, ул. Мира, д. 68'
        ]);
        Filial::insert([
            'name' => 'МЦ «Ладушки»',
            'address' => 'г. Сыктывкар, ул. Карла Маркса д. 117'
        ]);
        Filial::insert([
            'name' => 'МО Инвитро',
            'address' => 'г.Ухта, пр. Ленина, д. 28'
        ]);
    }
}
