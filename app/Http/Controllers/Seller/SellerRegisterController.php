<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerRegisterController extends Controller
{
    public function index()
    {
        return view('seller.register.sellerInfo');
    }


}
