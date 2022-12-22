<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')
            ->with('user')
            ->get();

        return view('blog.index', compact('posts'));
    }

    public function show($title)
    {
        $post = Post::where('title', $title)
            ->with('user')
            ->first();

        return view('blog.show', compact('post'));
    }
}
