<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Pet;
use App\Model\State;

class Customer extends Model
{
	/**
 		* Replace default primary key 'id'
 	*/
	protected $primaryKey = 'customerId';

	/**
 		* The attributes that aren't mass assignable.
 		*
 		* @var array
 	*/
	protected $guarded = (['customerId']);

    /**
     * Get the state owns the customer.
     */
    public function state()
    {
    	return $this->belongsTo(State::class, 'state', 'state');		//(parentModel, childForeignKey, parentPrimaryKey)
    }


    /**
     * Get the pet that associated with the customer.
     */
    public function pet()
    {
        return $this->hasMany(Pet::class, 'customerId', 'customerId');		//(childModel, childForeignKey, parentPrimaryKey)
    }
}
