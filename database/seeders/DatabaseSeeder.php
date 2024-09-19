<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            'author' => 'Lasty',
            'title' => 'The Joy of Gardening',
            'comments' => '',
            'contents' => "Gardening connects us to nature in a special way. From planting seeds to watching them bloom, each step brings a sense of accomplishment. It’s a peaceful, rewarding escape from everyday life.",
            'likes' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'author' => 'Lasty',
            'title' => 'The Art of Cooking',
            'comments' => '',
            'contents' => "Cooking is a creative outlet that satisfies both the mind and the palate. Whether experimenting with spices or perfecting a recipe, the kitchen becomes a space for self-expression and shared experiences.",
            'likes' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'author' => 'Lasty',
            'title' => 'The Power of Music',
            'comments' => '',
            'contents' => "Music has a universal way of touching our emotions. A single song can evoke nostalgia, joy, or sadness. Its rhythms and melodies bring people together, transcending language and culture.",
            'likes' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
