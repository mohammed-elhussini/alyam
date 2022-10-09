<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Picture;
use App\Models\Tax;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'except' => $this->faker->text(),
            'description' => $this->faker->sentence(),
            'model' => $this->faker->bothify('?????-#####'),
            'manufacture' => $this->faker->year('+10 years'),
            'brand_id' => Brand::factory(),
            'tax_id' => Tax::factory(),
        ];
    }
}
