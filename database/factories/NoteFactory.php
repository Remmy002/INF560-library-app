<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4), 
            'content' => fake()->paragraph(3), 
            'is_pinned' => fake()->boolean(20), 
            'category_id' => Category::factory(),
        ];
    }
}
