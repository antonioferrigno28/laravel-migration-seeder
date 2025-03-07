<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //verrà eseguito ogni volta che lanciamo QUESTO seeder
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company_name = $faker->company();
            $newTrain->train_departure_station = $faker->city();
            $newTrain->train_arrival_station = $faker->city();
            $newTrain->train_departure_time = $faker->dateTimeThisMonth();
            $newTrain->train_arrival_time = $faker->dateTimeThisMonth();
            $newTrain->train_code = $faker->randomNumber(5, true);
            $newTrain->is_food_available = $faker->boolean();
            $newTrain->number_of_wagon = $faker->numberBetween(5, 12);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();


            $newTrain->save();
        }
    }
}
