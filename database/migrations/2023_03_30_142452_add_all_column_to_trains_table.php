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
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->dateTime('Orario di partenza', $precision = 0);
            $table->dateTime('Orario di arrivo', $precision = 0);
            $table->string('Codice treno');
            $table->smallInteger('Numero carrozze')->nullable();
            $table->boolean('In orario');
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
            $table->dropColumn('Stazione di partenza');
            $table->dropColumn('Stazione di arrivo');
            $table->dropColumn('Orario di partenza');
            $table->dropColumn('Orario di arrivo');
            $table->dropColumn('Codice treno');
            $table->dropColumn('Numero carrozze');
            $table->dropColumn('In orario');
            $table->dropColumn('Cancellato');
        });
    }
};
