<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BuyerDashboardController extends Controller
{
    public function index()
    {
        // $allMedia = Media::where('collection_name','images')->get();
        // foreach($allMedia as $media){
        //     $media->delete();
        // }

        $product = Product::first();
        return view('dashboard',compact('product'));
    }
}
