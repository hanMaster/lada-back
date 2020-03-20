<?php

use App\Spec;
use Illuminate\Database\Seeder;

class SpecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spec::insert(['name' => 'терапевт']);
        Spec::insert(['name' => 'гастроэнтеролог']);
        Spec::insert(['name' => 'кардиолог']);
        Spec::insert(['name' => 'сомнолог']);
        Spec::insert(['name' => 'онколога']);
        Spec::insert(['name' => 'гинеколога']);
        Spec::insert(['name' => 'узи']);
    }
}
