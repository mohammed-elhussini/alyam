<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug  = Str::slug($title, '-');
        return [
            'title'  => $title,
            'slug'   => $slug,
            'except' => $this->faker->paragraph(),
            'body' => $this->faker->text(),
        ];
    }
}
