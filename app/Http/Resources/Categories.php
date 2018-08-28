<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Category as CategoryResource;

class Categories extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
       return [
           'data' => $this->collection->map(function ($item) use ($request) {
               return (new CategoryResource($item))->toArray($request);
           })
       ];
    }
}
