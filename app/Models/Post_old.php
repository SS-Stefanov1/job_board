<?php 
    namespace App\Models;

    class Post {
        public static function all() {
            return [
                ['id' => 1, 'title' => ' The Joy of Gardening', 'description' => "Gardening connects us to nature in a special way. From planting seeds to watching them bloom, each step brings a sense of accomplishment. It’s a peaceful, rewarding escape from everyday life.", ],
                ['id' => 2, 'title' => ' The Art of Cooking',   'description' => "Cooking is a creative outlet that satisfies both the mind and the palate. Whether experimenting with spices or perfecting a recipe, the kitchen becomes a space for self-expression and shared experiences.", ],
                ['id' => 3, 'title' => ' The Power of Music',   'description' => "Music has a universal way of touching our emotions. A single song can evoke nostalgia, joy, or sadness. Its rhythms and melodies bring people together, transcending language and culture.", ],
            ];
        }

        public static function find_post($id) {
            $all_posts = self::all();

            foreach ($all_posts as $post) {
                if ($post['id'] == $id) { return $post; }
            }

            return "Post not found";
        }
    }