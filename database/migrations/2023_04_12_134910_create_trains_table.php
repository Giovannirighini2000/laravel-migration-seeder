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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('Agency', 100);
            $table->string('Departure_station', 100);
            $table->string('Arrival_station', 100);
            $table->dateTime('Departure_time');
            $table->dateTime('Arrival_time');
            $table->string('Train_code', 50);
            $table->tinyinteger('Number_of_carriages');
            $table->boolean('Intime')->default(true);
            $table->boolean('Deleted')->default(false);
            $table->date('date');
            
            

            // TIME STAMP
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
