<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JoinRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $users = User::role('seller')->get();
        return view('admin.joinRequest', compact('users', 'admin'));
    }


    public function approve_joinRequest(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user->hasRole('seller')) {
            $user->update([$user->status = 'approved']);
        }

        return redirect()->route('admin.join_request');
    }

    public function reject_joinRequest(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user->hasRole('seller')) {
            $user->update([$user->status = 'rejected']);
        }

        return redirect()->route('admin.join_request');
    }

    public function accept_all_joinRequest()
    {
        $users = User::role('seller')->get();
        foreach($users as $user){
            $user->update([$user->status = 'approved']);
        }

        return redirect()->route('admin.join_request');
    }

     public function reject_all_joinRequest()
    {
        $users = User::role('seller')->get();
        foreach($users as $user){
            $user->update([$user->status = 'rejected']);
        }

        return redirect()->route('admin.join_request');
    }
}
