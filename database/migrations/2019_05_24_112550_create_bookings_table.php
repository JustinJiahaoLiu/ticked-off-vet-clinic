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
            $table->engine = 'InnoDB';
            $table->bigIncrements('bookingId', 11);
            $table->bigInteger('petId')->unsigned()->nullable();
            $table->bigInteger('staffId')->unsigned()->nullable();
            $table->dateTime('bookingDateTime')->nullable();       
            $table->longText('symptoms')->nullable();       
            $table->longText('treatments')->nullable();       
            $table->longText('notes')->nullable(); 
            $table->timestamps();
            
        });

        Schema::table('bookings', function($table) {
            $table->foreign('petId')->references('petId')->on('pets')->onDelete('cascade');
            $table->foreign('staffId')->references('staffId')->on('staff')->onDelete('cascade');
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
