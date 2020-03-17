<?php

use App\FilialSpec;
use Illuminate\Database\Seeder;

class FilialSpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FilialSpec::insert(['filial_id' => 1, 'spec_id' => 1]);
        FilialSpec::insert(['filial_id' => 1, 'spec_id' => 2]);
        FilialSpec::insert(['filial_id' => 1, 'spec_id' => 3]);
        FilialSpec::insert(['filial_id' => 1, 'spec_id' => 4]);
        FilialSpec::insert(['filial_id' => 1, 'spec_id' => 5]);
        FilialSpec::insert(['filial_id' => 1, 'spec_id' => 6]);
        FilialSpec::insert(['filial_id' => 1, 'spec_id' => 7]);
    }
}
