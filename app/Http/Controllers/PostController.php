<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
        // dd($posts);

        return view('posts.index', compact('posts')); // ['posts' => $posts]
    }

    /**
     * Show the form for creating a new resource.
     * 등록 form
     */
    public function create()
    {
        // if (!auth()->check()) {
        //     abort(403, '로그인이 필요합니다.');
        // }

        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * 등록 처리
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:200',
            'content' => ['required', 'min:5']
        ],[
            'title.required' => '제목은 필수 입력 항목입니다.',
            'title.min' => '제목은 최소 :min자 이상이어야 합니다.',
            'title.max' => '제목은 최대 :max자 이하이어야 합니다.',
            'content.required' => '내용은 필수 입력 항목입니다.',
            'content.min' => '내용은 최소 :min자 이상이어야 합니다.',
        ]);

        // $validated['user_id'] = auth()->id();
        // Post::create($validated);

        // 현재 인증된 사용자(auth()->user())를 가져옵니다.
        // ->posts()를 호출하여 인증된 사용자와 연결된 posts() 관계를 통해 새 게시물을 생성합니다.
        // ->create($validated)는 유효성 검사를 통과한 데이터를 사용하여 posts 테이블에 새 레코드를 추가합니다.
        auth()->user()->posts()->create($validated);

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
        // if ($post->user->id != auth()->id()) {
        //     abort(403, '게시물 작성자만 수정할 수 있습니다.');
        // }

        // update method를 호출하고 $post를 검사한다
        // postpolicy 클래스의 update 메서드 호출
        // Gate::authorize('update', $post);

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

        // return to_route('posts.index');
        return to_route('posts.show', ['post' => $post]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        Gate::authorize('delete', $post);
        $post->delete();
        return to_route('posts.index');
    }
}
