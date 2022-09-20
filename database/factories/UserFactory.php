<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'first_name' => fake()->name(),
            'last_name' => fake()->lastName(),
            'nationality' => fake()->country(),
            'birthday' => fake()->dateTime(),
            'phone' => fake()->phoneNumber(),
            'driving_license' => fake()->numerify('###-###-####'),
            'driving_license_exp' => fake()->dateTime(),
            'id_number' => fake()->numerify('###-###-####'),
            'email'          => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),  // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
