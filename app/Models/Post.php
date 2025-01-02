<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content', 'user_id'];

    public function user(): BelongsTo
    {
        // 하나의 레코드가 다른 하나의 레코드에 속할 때 사용하는 관계입니다.
        return $this->belongsTo(User::class);
    }
}
