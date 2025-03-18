<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    protected $model = Hotel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'location' => $this->faker->address,
            'description' => $this->faker->text,
            'address' => $this->faker->streetAddress,
            'price_range' => $this->faker->randomElement(['low', 'medium', 'high']),
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'has_activity' => $this->faker->boolean,
            'room_sizes' => json_encode($this->faker->randomElements(['Single', 'Double', 'Suite', 'King', 'Queen'], $this->faker->numberBetween(1, 3))),
            'available_times' => json_encode([$this->faker->time('H:i') . '-' . $this->faker->time('H:i'), '24/7']),
            'contacts' => json_encode([$this->faker->phoneNumber, $this->faker->email]),
        ];
    }
}
