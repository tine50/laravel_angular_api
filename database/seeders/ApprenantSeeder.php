<?php

namespace Database\Seeders;

use App\Models\Apprenant;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApprenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i = 1; $i <= 100; $i++){
            Apprenant::create([
                'id' =>$i,
                'prenom' => $faker->firstName(),
                'nom' => $faker->lastName(),
                'age' => $faker->numberBetween($min = 15, $max = 70),
                'classe_id' => $faker->numberBetween($min = 1, $max = 6)
            ]);
        }
    }
}
