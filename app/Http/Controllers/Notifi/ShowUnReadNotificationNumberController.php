<?php

namespace App\Http\Controllers\Notifi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowUnReadNotificationNumberController extends Controller
{
    public function adminUnReadNofitication()
    {
        $admin = Admin::find(1);
        
    }
}
