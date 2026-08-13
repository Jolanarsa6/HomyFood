<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }
}
