<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'cate_id' => rand(1, 6),
            'price' => rand(1000, 8000),
            'detail' => $this->faker->realText(200, 2),
            'image' => '',
            'quantity' => rand(1, 100)
        ];
    }
}
