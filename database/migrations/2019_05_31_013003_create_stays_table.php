<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stays', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('stayId');
            $table->date('stayStartDate');
            $table->date('stayEndDate');      
            $table->bigInteger('petId')->unsigned();  
            $table->decimal('stayCost');
            $table->timestamps();
        });

        Schema::table('stays', function ($table) {
             $table->foreign('petId')->references('petId')->on('pets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stays');
    }
}
