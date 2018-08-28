<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $with = [
        'subCategories'
    ];
    /**
     * Sets relationship between the Category and Products.
     * A Category is associated with one or more Productss.
     */
    public function products(){

        return $this->hasMany('App\Product');
    }

    /**
     * Sets relationship between the Category and Subcategories.
     * A Category is associated with one or more subcategories.
     */

    public function subCategories()
    {
        return $this->hasMany('App\SubCategory');
    }
}
