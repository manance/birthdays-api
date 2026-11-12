<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Birthday;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Birthday>
 */
class BirthdayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::factory(),
            "name"    => $this->faker->sentence(3),
            "author"  => fn (array $attributes) => $attributes['name'],
            "context" => $this->faker->sentence(20),
            "invited" => [
                "person" => $this->faker->sentence(2),
            ],
        ];
    }
}
