<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Post extends Model
{
    //
    protected $connection = 'mariadb';
    protected $table = 'posts';

    protected $fillable = [
        'caption',
        'image_path',
        'image_url',
        'user_id',
        
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
