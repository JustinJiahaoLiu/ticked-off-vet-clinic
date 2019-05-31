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
            $table->bigIncrements('petId');      
            $table->string('petName');       
            $table->string('species');       
            $table->string('breed');        
            $table->date('DOB');       
            $table->char('gender', 1);       
            $table->integer('weight')->unsigned();
            $table->bigInteger('customerId')->unsigned();
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
