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
        $train=new Train;

        $train->Azienda =$faker->word();
        $train->Stazione_di_partenza =$faker->word();
        $train->Stazione_di_arrivo =$faker->word();
        $train->Orario_di_partenza =$faker->time();
        $train->Orario_di_arrivo =$faker->time();
        $train->Codice_treno =$faker->bankAccountNumber();;
        $train->Numero_carrozze =$faker->numberBetween(0, 5);
        $train->In_orario =$faker->boolean;
        $train->Cancellato =$faker->boolean;

        $train->save();
    }
}
