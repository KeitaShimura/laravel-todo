<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function post() {
        return view('posts.post');
    }

    public function create(Request $request) {

        $request->validate([
            'content' => 'string|required|max:100'
        ]);

        $post = new Post();
        $post->content = $request->content;
        $post->save();
    }
}
