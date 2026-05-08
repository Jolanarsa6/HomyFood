<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = ['id'];

    function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
