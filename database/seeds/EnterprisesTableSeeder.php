<?php

use Illuminate\Database\Seeder;

class EnterprisesTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Enterprise::class, 1)->create();
    }
}