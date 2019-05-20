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
            $table->bigIncrements('customerId');       
            $table->string('title');       
            $table->string('firstName');       
            $table->string('lastName');       
            $table->string('gender');       
            $table->date('DOB');       
            $table->string('email');       
            $table->string('phone1');       
            $table->string('phone2');       
            $table->string('street1');       
            $table->string('street2');       
            $table->string('suburb');       
            $table->string('state');       
            $table->string('postcode');       
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
        Schema::dropIfExists('customers');
    }
}
