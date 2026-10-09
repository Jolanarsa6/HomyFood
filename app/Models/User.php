<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'password',
        'terms',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    function profile()
    {
        return $this->hasOne(Profile::class);
    }

    function products()
    {
        return $this->hasMany(Product::class);
    }

    function comments()
    {
        return $this->hasMany(Comment::class);
    }

    function replies()
    {
        return $this->hasMany(Reply::class);
    }

    function productWishlists()
    {
        return $this->belongsToMany(Product::class, 'wishlist');
    }

    function productCart()
    {
        return $this->belongsToMany(Product::class, 'cart');
    }

    function connectUs()
    {
        return $this->hasMany(ConnectUs::class, 'connect_us');
    }


    function commentsOnProducts()
    {
        return $this->hasManyThrough(
            Comment::class,
            Product::class,
            'user_id',
            'product_id',
            'id',
            'id'
        );
    }
}
