<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Review extends Model
{
    //

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function product()
    {
      return $this->belongsTo('App\Product');
    }

    public function scopeApproved($query)
    {
      return $query->where('approved', true);
    }

    public function scopeSpam($query)
    {
      return $query->where('spam', true);
    }

    public function scopeNotSpam($query)
    {
      return $query->where('spam', false);
    }

    public function getTimeagoAttribute()
    {
      $date = Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
      return $date;
    }
}
