<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $dataValidated = $request->validated();
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $user = Auth::user();
            $data['token'] = $user->createToken('LoginToken')->plainTextToken;
            $data['full_name'] = $user->full_name;
            $data['email'] = $user->email;
            return ApiResponse::sendResponse(200, 'User Logged In Successfully', $data);
        } else {
            return ApiResponse::sendResponse(401, 'User Credential\'s dosen\'t exist', []);
        }
    }
}
