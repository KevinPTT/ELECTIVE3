<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10), // Random user ID between 1 to 10
            'journey_id' => $this->faker->numberBetween(1, 20), // Random journey ID between 1 to 20
            'booking_date' => $this->faker->dateTimeBetween('-1 month', '+1 month'), // Random booking date within the past month and next month
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']), // Random status from the provided options
        ];
    }
}
