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
            $newTrain->time_departure= $faker->time();
            $newTrain->time_arrival=$faker->time();
            $newTrain->code=$faker->numerify('##########');
            $newTrain->carriages=$faker->numberBetween(1,30);;
            $newTrain->in_time='In Orario';
            $newTrain->late='In Ritardo';
            $newTrain->save();
            dd($newTrain);
        }
    }
}
