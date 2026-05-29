<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellersControlController extends Controller
{
    public function index()
    {
        return view('admin.sellersControl');
    }
}
