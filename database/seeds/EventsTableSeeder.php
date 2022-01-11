<?php

use Illuminate\Database\Seeder;
use App\Event;
use Faker\Generator as Faker; 

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $event = new Event();
            $event->title = $faker->sentence();
            $event->description = $faker->sentence(12);
            $event->save();
        }
    }
}
