<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ConnectUsRequest;
use App\Models\ConnectUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnectUsController extends Controller
{
    public function index()
    {
        return view('buyer.contact-us');
    }

    public function store(ConnectUsRequest $request)
    {
        $user_id = Auth::user()->id;
        $validatedData = $request->validated();
        $validatedData['date'] = now();
        $validatedData['user_id'] = $user_id;


        ConnectUs::create($validatedData);

        return redirect()->back()->with('messageSend', 'Your message sending successfully.');
    }
}
