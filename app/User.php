<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Sets relationship between the Users and Orders.
     * A User can have multiple/many product orders.
     */
    public function orders(){

        return $this->hasMany('App\Order');
    }

    /**
     * Sets relationship between the Users and Prescriptions.
     * A User can have many medical prescriptions.
     */
    public function prescriptions(){

        return $this->hasMany('App\Prescription');
    }

    /**
     * Sets relationship between the Users and Wallet.
     * A User can have only one wallet upon registration.
     */
    public function wallet(){

        return $this->hasOne('App\Wallet');
    }
}
