<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     protected $guarded = ['id'];



    public function products()
    {
       return $this->belongsToMany(Product::class, 'product_payment');
    }

     public function admins()
    {
        return $this->belongsTo(Admin::class);
    }
}
