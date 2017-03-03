<?php

use Illuminate\Database\Seeder;

class Locations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = file_get_contents('codmun.csv');
        print_r($csv, true);
    }
}
