<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    /**
     * Sets relationship between the Prescriptions and Users.
     * A medical prescription belongs to one(a particular) user.
     */
    public function user(){

        return $this->belongsTo('App\User');
    }
}
