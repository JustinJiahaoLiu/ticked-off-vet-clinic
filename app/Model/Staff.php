<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\State;

class Staff extends Model
{
    /**
     * Get the state owns the staff.
     */
    public function state()
    {
    	return $this->belongsTo(State::class, 'state', 'state');
    }
}
