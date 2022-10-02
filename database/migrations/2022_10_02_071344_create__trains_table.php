<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Company', 100);
            $table->string('Depature_station', 100);
            $table->string('Arrival_station', 100);
            $table->dateTime('Depature_Time');
            $table->dateTime('Arrival_Time')->nullable();//incaso il treno e annullato
            $table->string('Train_Code',25);
            $table->unsignedTinyInteger('Number_Carriages');
            $table->boolean('In_time')->default(true);
            $table->boolean('Cancelled')->default(false);

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
        Schema::dropIfExists('_trains');
    }
}
