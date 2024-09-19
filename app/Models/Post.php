<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    public static function getTags($post_id) {
        if ($post_id === 1) {
            return ['one'];
        } else { 
            return ['other'];
        }
    }
}
