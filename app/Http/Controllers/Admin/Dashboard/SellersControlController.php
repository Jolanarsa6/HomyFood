<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellersControlController extends Controller
{
    public function index()
    {
        $users = ModelsUser::role('seller')->get();
        return view('admin.sellersControl',compact('users'));
    }
}
