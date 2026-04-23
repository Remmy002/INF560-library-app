<?php

namespace Database\Factories;

use App\Models\Fine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Fine>
 */
class FineFactory extends Factory
{
    public function definition(): array
    {
        return [
            'amount' => fake()->randomFloat(2, 5, 50),
            'reason' => fake()->sentence(),
            'status' => 'pending',
            'paid_at' => null,
        ];
    }
}
