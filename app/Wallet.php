<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    /**
     * Sets relationship between the Wallets and Users.
     * A wallet belongs to only one User.
     */
    public function user(){

        return $this->belongsTo('App\User');
    }


    /**
     * Sets relationship between the Wallets and Wallet Transactions.
     * A wallet can have multiple wallet transactions.
     */
    public function walletTransaction(){

        return $this->hasMany('App\WalletTransaction');
    }
}
