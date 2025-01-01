<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8, string',
        ], [
            'email.required' => '이메일은 필수 입력 항목입니다.',
            'email.email' => '이메일 형식이 아닙니다.',
            'password.required' => '비밀번호는 필수 입력 항목입니다.',
            'password.min' => '비밀번호는 8자 이상이어야 합니다.',
            'password.string' => '비밀번호는 문자열로 입력해야 합니다.',
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('posts.index'));
        } else {
            return back()->withErrors([
                'email' => '등록된 정보가 없습니다.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout(); // 로그아웃과 관련 된 정리작업을 진행함
        $request->session()->invalidate(); // 세션을 파괴함. session_destroy();
        $request->session()->regenerateToken(); // csrf 토큰 재생성
        return to_route('posts.index');
    }
}
