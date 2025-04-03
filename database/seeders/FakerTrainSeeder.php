<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class FakerTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->total_carriages = $faker->numberBetween(8, 15);
            $newTrain->on_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();

            $newTrain->save();

        }      
    }
}
