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
            $table->bigIncrements('stayId', 11);
            $table->date('stayStartDate')->nullable();
            $table->date('stayEndDate')->nullable();      
            $table->bigInteger('petId')->unsigned()->nullable();  
            $table->decimal('stayCost', 19, 4)->nullable();
            $table->timestamps();
        });

        Schema::table('stays', function ($table) {
             $table->foreign('petId')->references('petId')->on('pets')->onDelete('cascade');
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
