<?php

use Illuminate\Database\Seeder;

class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $score = factory(\App\Score::class)->make();
        $event = \App\Event::inRandomOrder()->first(); 
        $score->events()->associate($event);
        $score->save();
    }
}
