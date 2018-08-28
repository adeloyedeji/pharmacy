<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Sets relationship between the Orders and Users.
     * An Order is associated with a single user.
     */
    public function user(){

        return $this->belongsTo('App\User');
    }
}
