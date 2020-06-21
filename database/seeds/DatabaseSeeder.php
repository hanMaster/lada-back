<?php

use App\DoctorService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            FilialsSeeder::class,
            DoctorFilialSeeder::class,
            DoctorsSeeder::class,
            SpecsSeeder::class,
            DoctorSpecSeeder::class,
            DoctorServiceSeeder::class,
//            CalendarEventsSeeder::class,
            ServicesSeeder::class
        ]);
    }
}
