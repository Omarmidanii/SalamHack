<?php

namespace Database\Factories;

use App\Models\EntertainmentPlace;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntertainmentPlaceFactory extends Factory
{
    protected $model = EntertainmentPlace::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company, // Fake company name
            'location' => $this->faker->address, // Fake address
            'address' => $this->faker->streetAddress, // Fake street address
            'price_range' => $this->faker->randomElement(['low', 'medium', 'high']), // Random price range
            'rating' => $this->faker->randomFloat(1, 1, 5), // Random rating between 1 and 5
            'type_of_activity' => $this->faker->randomElement(['Cinema', 'Amusement Park', 'Theater', 'Museum']), // Random activity type
            'open_time' => $this->faker->time('H:i:s'), // Random open time
            'close_time' => $this->faker->time('H:i:s'), // Random close time
            'contacts' => json_encode([$this->faker->phoneNumber, $this->faker->email]), // Random contacts
        ];
    }
}
