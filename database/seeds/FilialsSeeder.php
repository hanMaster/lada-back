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
            'name' => 'Медицинский офис Инвитро',
            'address' => 'г. Сыктывкар, ул. Орджоникидзе, д. 33/45'
        ]);
    }
}
