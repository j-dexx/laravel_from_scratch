<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()->filter(request(['month', 'year']))->get();
        $tags = Tag::has('posts')->pluck('name');

        $archives = Post::archives();
        return view('posts.index', compact('posts', 'archives', 'tags'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id(),
        ]);

        return redirect('/');
    }
}
