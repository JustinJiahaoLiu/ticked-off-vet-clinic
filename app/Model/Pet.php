<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Customer;
use App\Model\Stay;

class Pet extends Model
{
	/**
 		* Replace default primary key 'id'
 	*/
	protected $primaryKey = 'petId';
	/**
 		* The attributes that aren't mass assignable.
 		*
 		* @var array
 	*/
	protected $guarded = (['petId']);

    /**
    	* Get the state owns the staff.
    */
    public function customer()
    {
    	return $this->belongsTo(Customer::class, 'customerId','customerId');	//(parentModel, childForeignKey, parentPrimaryKey)
    }

    /**
        * Get the stay that associated with this pet.
    */

    public function stay()
    {
        return $this->hasMany(Stay::class,'petId','petId');     //(childModel, childForeignKey, parentPrimaryKey)
    }
}
