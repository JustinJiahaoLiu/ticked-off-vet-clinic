<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('customerId', 11);       
            $table->string('title', 10)->nullable();       
            $table->string('firstName', 50)->nullable();       
            $table->string('lastName', 50)->nullable();       
            $table->char('gender', 1)->nullable();       
            $table->date('DOB')->nullable();       
            $table->string('email', 100)->nullable();       
            $table->string('phone1', 20)->nullable();       
            $table->string('phone2', 20)->nullable();       
            $table->string('street1', 150)->nullable();       
            $table->string('street2', 150)->nullable();       
            $table->string('suburb', 80)->nullable();       
            $table->string('state', 3)->nullable();       
            $table->string('postcode', 4)->nullable();       
            $table->timestamps();
        });

        Schema::table('customers', function($table) {
            $table->foreign('state')->references('state')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
