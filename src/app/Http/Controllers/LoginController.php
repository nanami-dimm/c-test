<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function confirm(LoginRequest $request)
    {
        $login = $request->only([ 'email', 'password']);
        return view('login', ['login' => $login]);
    }
}
