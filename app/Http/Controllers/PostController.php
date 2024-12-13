<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//odmene dole
use App\Models\Post;
use App\Models\Category;
class PostController extends Controller
{
    //


    public function index(Request $request)
    {
        $query = Post::query();

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $posts = $query->with('category')->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|min:50',
            'category_id' => 'required|exists:categories,id',
        ]);

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|min:50',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
