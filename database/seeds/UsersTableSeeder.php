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
            'email' => '1@2.com',
            'password' => bcrypt('1qaz2wsx'),
            'filial_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        User::insert([
            'name' => 'Администратор 2',
            'email' => '2@2.com',
            'filial_id'=> 2,
            'password' => bcrypt('1qaz2wsx'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
