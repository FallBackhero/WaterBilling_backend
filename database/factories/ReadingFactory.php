<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reading>
 */
class ReadingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reader_id' =>User::all()->random()->user_key,
            'consumer_id'=>fake()->randomDigit(),
            'reading'=>fake()->randomDigit(),
            'reading_date'=>fake()->dateTime(),
            'bill'=>fake()->randomDigit(),
            'date_paid'=>fake()->dateTime(),
            'due_date'=>fake()->dateTime(),
            'service_period'=>$this->faker->randomElement(['20','23','25']),
        ];
    }
}
