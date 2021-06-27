<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    public function run()
    {
        $member = factory(\App\Member::class)->make();
        $enterprise = \App\Enterprise::inRandomOrder()->first();
        $member->enterprises()->associate($enterprise);
        $member->save();
    }
}
