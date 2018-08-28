<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    /**
     * Sets relationship between the Subcategories and Category.
     * A SubCategory belongs to a category.
     */

    //  protected $with = [
    //     'cate'
    //  ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
