<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Администратор 1',
            'email' => 'admin1@ladamed.ru',
            'password' => bcrypt('1Qaz2Wsx'),
            'filial_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        User::insert([
            'name' => 'Администратор 2',
            'email' => 'admin2@ladamed.ru',
            'filial_id'=> 2,
            'password' => bcrypt('3Edc4Rfv'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
