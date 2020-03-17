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
        Spec::insert(['name' => 'Прием терапевта']);
        Spec::insert(['name' => 'Прием гастроэнтеролога']);
        Spec::insert(['name' => 'Прием кардиолога']);
        Spec::insert(['name' => 'Прием сомнолога']);
        Spec::insert(['name' => 'Прием онколога']);
        Spec::insert(['name' => 'Прием гинеколога']);
        Spec::insert(['name' => 'Узи исследования']);
    }
}
