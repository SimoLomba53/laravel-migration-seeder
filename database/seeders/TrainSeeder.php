<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train=new Train;

        $new_train->Azienda = '';
        $new_train->Stazione_di_partenza = '';
        $new_train->Stazione_di_arrivo = 'aaa';
        $new_train->Orario_di_partenza = '';
        $new_train->Orario_di_arrivo = '';
        $new_train->Codice_treno = '';
        $new_train->Numero_carrozze = '5';
        $new_train->In_orario = '';
        $new_train->Cancellato = '';

        $new_train->save();
    }
}
