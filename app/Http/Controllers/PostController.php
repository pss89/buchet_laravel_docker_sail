<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $name = '홍길동';
        // $age = 20;

        // $posts = ['게시물1', '게시물2', '게시물3'];
        // return view('posts.index', ['name' => $name, 'age' => $age]);
        // return view('posts.index', compact('name', 'age', 'posts'));
        $posts = Post::all();

        return view('posts.index', compact('posts')); // ['posts' => $posts]
    }

    /**
     * Show the form for creating a new resource.
     * 등록 form
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * 등록 처리
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Post $post)
    // public function show($id)
    public function show(Post $post)
    {
        //
        // $posts = Post::find($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     * 수정 form
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $validated = $request->validate([
            // 'title' => 'required|min:3',
            'title' => ['required', 'min:3', 'max:200'],
            'content' => ['required', 'min:5'],
        ]);

        $post->update($validated);

        return to_route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return to_route('posts.index');
    }
}
