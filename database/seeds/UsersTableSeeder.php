<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $user = factory(\App\User::class)->make();

        $enterprise = \App\Enterprise::inRandomOrder()->first(); 
        $user->enterprises()->associate($enterprise);

        $user->save();
    }
}
