<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Trabajo', 'Estudio', 'Personal', 'Ideas'];

        foreach ($categories as $cat) {
            Category::create([
                'name' => $cat,
                'description' => "Notas relacionadas con $cat"
            ]);
        }
    }
}