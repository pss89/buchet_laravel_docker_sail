<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     * 사용자가 모든 포스트를 조회할 수 있는지 확인합니다.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     * 사용자가 특정 포스트를 조회할 수 있는지 확인합니다.
     * $user: 현재 로그인한 사용자
     * $post: 현재 조회하려는 포스트
     */
    public function view(User $user, Post $post): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create models.
     * 로그인 한 사용자가 새로운 포스트를 생성할 수 있는지 확인합니다.
     */
    public function create(User $user): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the model.
     * 특정 소유자가 자신의 포스트를 수정할 수 있는지 확인합니다.
     */
    public function update(User $user, Post $post): bool
    {
        //
        // $user의 id와 $post의 user_id가 일치하면 true를 반환합니다.
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     * 특정 소유자가 자신의 포스트를 삭제할 수 있는지 확인합니다.
     */
    public function delete(User $user, Post $post): bool
    {
        //
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     * 사용자가 특정 포스트를 복원할 수 있는지 확인합니다.
     */
    public function restore(User $user, Post $post): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     * 사용자가 특정 포스트를 영구적으로 삭제할 수 있는지 확인합니다.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        //
    }
}
