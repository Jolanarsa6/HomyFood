<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\AprioriAlgorithmService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpecialOfferController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AprioriAlgorithmService $algorithm)
    {
        $user = Auth::user();
        // $specialProducts = $algorithm->getPersonalizedRecommendations($user,5);
        $products = Product::all();
        return view('buyer.special-offers', compact('products'));
    }
}
