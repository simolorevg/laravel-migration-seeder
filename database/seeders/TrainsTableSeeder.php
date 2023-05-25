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
            $newtrain = new Train();
            $newtrain->agency = $faker->name;
            $newtrain->departure = $faker->city;
            $newtrain->arrivals = $faker->city;
            $newtrain->time_departure = $faker->dateTime;
            $newtrain->time_arrival = $faker->dateTime;
            $newtrain->train_code = $faker->postcode;
            $newtrain->carriages = $faker->randomDigit;
            $newtrain->in_time = $faker->numberBetween(0, 1);
            $newtrain->in_time = $faker->numberBetween(0, 1);
        }
    }
}
