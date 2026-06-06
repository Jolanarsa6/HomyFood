<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellersControlController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.sellersControl',compact('admin'));
    }
}
