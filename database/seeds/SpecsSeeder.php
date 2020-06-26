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
        Spec::insert(['name' => 'терапевт', 'interval' => 20]);
        Spec::insert(['name' => 'гастроэнтеролог', 'interval' => 20]);
        Spec::insert(['name' => 'кардиолог', 'interval' => 20]);
        Spec::insert(['name' => 'сомнолог', 'interval' => 30]);
        Spec::insert(['name' => 'онколог', 'interval' => 20]);
        Spec::insert(['name' => 'гинеколог', 'interval' => 20]);
        Spec::insert(['name' => 'узи', 'interval' => 20]);
        Spec::insert(['name' => 'эндокринолог', 'interval' => 20]);
        Spec::insert(['name' => 'отоларинголог', 'interval' => 15]);
    }
}
