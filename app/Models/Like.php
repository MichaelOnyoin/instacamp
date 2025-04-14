<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $connection = 'mariadb';
    protected $table = 'likes';

    protected $fillable = [
        'user_id',
        'post_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post():BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function scopeWithPost($query, $postId)
    {
        return $query->where('post_id', $postId);
    }

}
