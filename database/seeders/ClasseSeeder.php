<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $classes = ['DBE', 'DFE', 'ASSC', 'ABD', 'APD', 'IOT'];

        for($i = 0; $i < 6; $i++){
            Classe::create([
                'id' =>$i+1,
                'name' => $classes[$i]
            ]);
        }

    }
}
