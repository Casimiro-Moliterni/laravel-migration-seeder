<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);//  Azienda
            $table->string('departure_station',100);//  Stazione di partenza
            $table->string('arrival_station',100);// Stazione di arrivo
            $table->dateTime('time_departure',);// Orario di partenza 
            $table->dateTime('time_arrival',);// Orario di arrivo
            $table->string('code');// Codice Treno
            $table->tinyInteger('carriages')->unsigned();// Numero Carrozze
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
