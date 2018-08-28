<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{

    /**
     * Sets relationship between the Wallet Transactions and Wallet.
     * A wallet transaction is associated with a particular user's wallet.
     */
    public function wallet(){

        return $this->belongsTo('App\Wallet');
    }
}
