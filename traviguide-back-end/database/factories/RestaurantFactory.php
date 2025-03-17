<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company, // Generate a fake company name
            'location' => $this->faker->address, // Generate a fake address
            'address' => $this->faker->streetAddress, // Generate a fake street address
            'price_range' => $this->faker->randomElement(['low', 'medium', 'high']), // Random price range
            'food_types' => json_encode($this->faker->randomElements(['Syrian', 'Mediterranean', 'Italian', 'Mexican', 'Japanese'], $this->faker->numberBetween(1, 3))), // Random food types
            'character' => $this->faker->randomElement(['Traditional', 'Modern', 'Rustic', 'Elegant']), // Random character
            'rating' => $this->faker->randomFloat(1, 1, 5), // Random rating between 1 and 5
            'open_time' => $this->faker->time('H:i:s'), // Random open time
            'close_time' => $this->faker->time('H:i:s'), // Random close time
            'contacts' => json_encode([$this->faker->phoneNumber, $this->faker->email]), // Random contacts
        ];
    }
}
