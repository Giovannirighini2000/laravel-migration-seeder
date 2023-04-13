<?php

namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 1000; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->bothify('????-###');
            $new_train->number_of_carriages = $faker->numberBetween(1, 10);
            $new_train->intime = $faker->boolean();
            $new_train->deleted = $faker->boolean(10);
            $new_train->date = $faker->dateTimeBetween('Now');
            $new_train->save();
        }
    }
}
