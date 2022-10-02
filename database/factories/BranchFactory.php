<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'lat' => $this->faker->latitude($min = -90, $max = 90) ,
            'lang' => $this->faker->longitude($min = -180, $max = 180),
            'address' => $this->faker->streetAddress(),
        ];
    }
}
