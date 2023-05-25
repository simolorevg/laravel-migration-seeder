<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $checktrain = $faker->numberBetween(0, 1);
            $newtrain = new Train();
            $newtrain->agency = $faker->name;
            $newtrain->departure = $faker->city;
            $newtrain->arrivals = $faker->city;
            $newtrain->time_departure = $faker->dateTimeBetween('-1 week', '+1 week');
            $newtrain->time_arrival = $faker->dateTimeBetween('-1 week', '+1 week');
            $newtrain->train_code = $faker->postcode;
            $newtrain->carriages = $faker->randomDigit;
            $newtrain->in_time = $checktrain;
            if ($checktrain == 1) {
                $newtrain->late = 0;
            } else {
                $newtrain->late = 1;
            }
            $newtrain->save();
        }
    }
}
