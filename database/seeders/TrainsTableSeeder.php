<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i <= 10 ; $i++){
            $newTrain = new Train();
            $newTrain->name=$faker->randomElement(['Italo', 'FrecciaRossa', 'Treni Italia', 'Intercity', 'Regional','Luxury']);
            $newTrain->departure_station=$faker->city();
            $newTrain->arrival_station=$faker->city();
            $newTrain->time_departure=  $faker->dateTimeBetween('-1 day', '+1 day');
            $newTrain->time_arrival=$faker->dateTimeBetween('-1 day', '+2 day');
            $newTrain->code=$faker->numerify('##########');
            $newTrain->carriages=$faker->numberBetween(1,30);;
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
            dd($newTrain);
        }
    }
}
