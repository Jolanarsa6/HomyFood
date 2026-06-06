<?php

namespace App\Http\Controllers\Notifi;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowUnReadNotificationNumberController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.layouts.header');      
    }
}
