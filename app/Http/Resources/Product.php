<?php

namespace App\Http\Resources;

//use App\Category;
use Illuminate\Http\Resources\Json\Resource;

class Product extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

/*       return [
           'id' => $this->id,
           'title' => $this->title,
           'description' => $this->description,
           'price' => $this->price,
           'description' => $this->description,
           'image1' => $this->image1,
       ];*/
    }
}
