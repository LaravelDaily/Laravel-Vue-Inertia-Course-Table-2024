<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'   => $this->faker->word(),
            'content' => $this->faker->paragraphs(asText: true),
        ];
    }
}
