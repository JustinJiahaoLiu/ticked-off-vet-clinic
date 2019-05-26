<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('bookingId');
            $table->bigInteger('petId');
            $table->bigInteger('staffId');
            $table->date('bookingDateTime');       
            $table->longText('symptoms');       
            $table->longText('treatments');       
            $table->longText('notes'); 
            $table->timestamps();
            $table->foreign('petId')->references('petId')->on('pets');
            $table->foreign('staffId')->references('staffId')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
