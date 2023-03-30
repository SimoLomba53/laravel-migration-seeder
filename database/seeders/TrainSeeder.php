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
        for($i=0;$i<50;$i++){
        $train=new Train;

        $train->Azienda =$faker->district();
        $train->Stazione_di_partenza =$faker->district();
        $train->Stazione_di_arrivo =$faker->word();
        $train->Orario_di_partenza =$faker->DateTime();
        $train->Orario_di_arrivo =$faker->DateTime();
        $train->Codice_treno =$faker->bankAccountNumber();;
        $train->Numero_carrozze =$faker->numberBetween(0, 5);
        $train->In_orario =$faker->boolean;
        $train->Cancellato =$faker->boolean;

        $train->save();
        }
    }
}
