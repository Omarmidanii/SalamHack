<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'location' => $this->location,
            'name' => $this->name,
            'address' => $this->address,
            'price_range' => $this->price_range,
            'food_types' => json_encode($this->food_types),
            'character' => $this->character,
            'rating' => $this->rating,
            'open_time' => $this->open_time,
            'close_time' => $this->close_time,
            'contacts' => json_encode($this->contacts),
        ];
    }
}
