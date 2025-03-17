<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
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
            'has_activity' => $this->has_activity,
            'room_sizes' => $this->room_sizes,
            'available_times' => $this->available_times,
            'contacts' => $this->contacts,
        ];
    }
}
