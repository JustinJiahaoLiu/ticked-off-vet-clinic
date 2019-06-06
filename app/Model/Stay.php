<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Pet;

class Stay extends Model
{
    /**
 		* Replace default primary key 'id'
 	*/
	protected $primaryKey = 'stayId';

	/**
 		* The attributes that aren't mass assignable.
 		*
 		* @var array
 	*/
	protected $guarded = (['stayId']);

    /**
    	* Get the state owns the staff.
    */
    public function pet()
    {
    	return $this->belongsTo(Pet::class, 'petId','petId');	//(parentModel, childForeignKey, parentPrimaryKey)
    }
}
