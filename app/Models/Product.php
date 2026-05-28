<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $guarded = ['id'];



    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }
    public function deliveries()
    {
        return $this->belongsToMany(Delivery::class, 'product_delivery');
    }
    public function packagings()
    {
        return $this->belongsToMany(Packaging::class, 'product_packaging');
    }
    public function payments()
    {
        return $this->belongsToMany(Payment::class, 'product_payment');
    }
}
