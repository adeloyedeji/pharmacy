<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Sets relationship between the Products and Categories.
     * A Product is associated with one or more Categories.
     */
    public function categories()
    {

        return $this->belongsTo('App\Category', 'category_id');
    }

    public function subCategories()
    {
        return $this->belongsTo('App\SubCategory', 'sub_category_id');
    }

	      public function reviews()
      {
        return $this->hasMany('App\Review');
      }
}
