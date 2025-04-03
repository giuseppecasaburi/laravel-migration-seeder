<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = config("trains");

        foreach($trains as $train) {
            $newTrain = new Train();
            
            $newTrain->departure_station = $train["departure_station"];
            $newTrain->arrival_station = $train["arrival_station"];
            $newTrain->departure_time = $train["departure_time"];
            $newTrain->arrival_time = $train["arrival_time"];
            $newTrain->train_code = $train["train_code"];
            $newTrain->total_carriages = $train["total_carriages"];
            $newTrain->on_time = $train["on_time"];
            $newTrain->deleted = $train["deleted"];

            $newTrain->save();
            
        }
    }
}
