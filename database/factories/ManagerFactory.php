<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username'       => $this->faker->userName(),
            'first_name'     => $this->faker->firstName(),
            'last_name'      => $this->faker->lastName(),
            'phone'          => $this->faker->phoneNumber(),
            'email'          => $this->faker->unique()->safeEmail(),
            'password'       => Hash::make('123456'), // password
            'avatar'          => $this->faker->imageUrl(),
        ];
    }
}
