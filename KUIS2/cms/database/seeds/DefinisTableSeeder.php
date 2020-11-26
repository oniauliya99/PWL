<?php

use Illuminate\Database\Seeder;

class DefinisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Definis::clss, 1)-create();
    }
}
