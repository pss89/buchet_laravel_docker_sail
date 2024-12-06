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
        $name = '홍길동';
        $age = 20;

        $postList = ['게시물1', '게시물2', '게시물3'];
        // return view('posts.index', ['name' => $name, 'age' => $age]);
        return view('posts.index', compact('name', 'age', 'postList'));
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
    public function show(Post $post)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
