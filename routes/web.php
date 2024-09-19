<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () { return view('posts', 
    [
        'posts' => Post::all(),
    ]
); });

Route::get('/posts/{id}', function($id) { 
    return view('post', [
        'post' => Post::find($id)
    ]);
});





// Route::get('/hello', fn() => response("<h1>Hello</h1>")->header('Content-Type', 'text/html') );
// Route::get('/gigs/{id}', function($id) { return response('Post ' . $id); });
// Route::get('/search', function(Request $req) { return dd($req->kur); });