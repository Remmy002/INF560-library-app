<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Note;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();

        Note::factory(20)->make()->each(function ($note) use ($categories) {
            
            $note->category_id = $categories->random()->id;
            $note->save();
        });
    }
}