<?php

namespace App\Http\Controllers\Notifi;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Notifications\SellerJoinRequest;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class sellerJoinRequestNotifi extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.notifications-center', compact('admin'));
    }

    public function edit($notification_id)
    {
        $notification = Auth::guard('admin')->user()->unreadNotifications()->find($notification_id);

        if ($notification) {
            $notification->markAsRead();
        }


        return redirect($notification->data['url'] ?? url()->previous());
    }

    public function readAll()
    {
        Auth::guard('admin')->user()->unreadNotifications->markAsRead();

        return redirect($notification->data['url'] ?? url()->previous());
    }
}
