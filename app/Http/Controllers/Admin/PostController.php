<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Route;

class PostController extends Controller
{
    
    public function index()
    {
        $postsData = Post::all();

        return view('admin.posts.index', compact('postsData'));
    }

    
    public function create()
    {
        return view ('admin.posts.create');
    }

    
    public function store(Request $request)
    {
        $postForm = $request->all();

        $post = new Post();
        $post->fill($postForm);
        $post->save();

        return redirect()->route('admin.posts.index', $post->slug);
    }

    
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    
    public function update(Request $request, Post $post)
    {
        $postForm = $request->all();

        $post->update($postForm);

        return redirect()->route('admin.posts.show', $post->id);
    }

    
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
