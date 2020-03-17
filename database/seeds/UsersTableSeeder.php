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
            'name' => 'han',
            'email' => '1@2.com',
            'password' => bcrypt('1qaz2wsx'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        User::insert([
            'name' => 'Администратор',
            'email' => '2@2.com',
            'password' => bcrypt('1qaz2wsx'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
