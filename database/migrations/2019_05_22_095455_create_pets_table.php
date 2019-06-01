<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('petId', 11);      
            $table->string('petName', 80)->nullable();       
            $table->string('species', 50)->nullable();       
            $table->string('breed', 50)->nullable();        
            $table->date('DOB')->nullable();       
            $table->char('gender', 1)->nullable();       
            $table->float('weight')->nullable();     //positive value only
            $table->bigInteger('customerId', 11)->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('pets', function($table) {
            $table->foreign('customerId')->references('customerId')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
