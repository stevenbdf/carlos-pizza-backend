<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'url_image' => $this->url_image,
            'category_id' => $this->category_id,
            'category' => $this->category,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
