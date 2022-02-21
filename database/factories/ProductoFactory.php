<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 120),
            'nombre' => $this->faker->sentence,
            'descripcion' => $this->faker->sentence,
            'precio' => $this->faker->randomFloat(2, 0, 100),
            'imagen' => $this->faker->imageUrl(400, 400)

        ];
    }
}
