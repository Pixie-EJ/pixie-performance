<?php

use Illuminate\Database\Seeder;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rule = factory(\App\Rule::class)->make();
        $enterprise = \App\Enterprise::inRandomOrder()->first();
        $rule->enterprises()->associate($enterprise);
        $rule->save();
    }
}
