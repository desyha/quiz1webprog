<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showCategory($category)
    {
        $posts = Post::where('category', $category)->get();
        return view('category', compact('posts', 'category'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('detail', compact('post'));
    }

    public function showWriters()
    {
        $writers = Post::select('author')->distinct()->get();
        return view('writers.index', compact('writers'));
    }

    public function showByWriter($author)
    {
        $posts = Post::where('author', $author)->get();
        return view('writers.show', compact('posts', 'author'));
    }

}
