<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EntertainmentPlaceResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'location' => $this->location,
            'address' => $this->address,
            'price_range' => $this->price_range,
            'rating' => $this->rating,
            'type_of_activity' => $this->type_of_activity,
            'open_time' => $this->open_time,
            'close_time' => $this->close_time,
            'contacts' => $this->contacts,
            'categories' => $this->whenLoaded('categories', function () {
                return CategoryResource::collection($this->categories);
            }),
        ];
    }
}
