<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('Azienda');
            $table->string('Stazione_di_partenza');
            $table->string('Stazione_di_arrivo');
            $table->dateTime('Orario_di_partenza', $precision = 0);
            $table->dateTime('Orario_di_arrivo', $precision = 0);
            $table->string('Codice_treno');
            $table->smallInteger('Numero_carrozze')->nullable();
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('Azienda');
            $table->dropColumn('Stazione_di_partenza');
            $table->dropColumn('Stazione_di_arrivo');
            $table->dropColumn('Orario_di_partenza');
            $table->dropColumn('Orario_di_arrivo');
            $table->dropColumn('Codice_treno');
            $table->dropColumn('Numero_carrozze');
            $table->dropColumn('In_orario');
            $table->dropColumn('Cancellato');
        });
    }
};
