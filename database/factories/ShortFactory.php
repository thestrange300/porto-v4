<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Short>
 */
class ShortFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'uuid' => $this->faker->uuid(),
            'url' => $this->faker->url(),
            'short_url' => $this->faker->domainWord(),
        ];
    }
}
