<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function post() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.post', compact('posts'));
    }

    public function create(Request $request) {

        $request->validate([
            'content' => 'string|required|max:100'
        ]);

        $post = new Post();
        $post->content = $request->content;
        $post->save();

        return redirect()->back()->with('success', 'TODOを作成しました。');
    }

    public function destroy(Request $request, $id) {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'TODOを削除しました。');
    }

    public function updatePage($id) {

        $post = Post::findOrFail($id);
        return view('posts.update', compact('post'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'content' => 'string|required|max:100'
        ]);

        $post = Post::findOrFail($id);

        $post->content = $request->content;
        $post->update(['id' => $post->id]);

        return redirect()->route('posts')->with('success', 'TODOを作成しました。');
    }
}
