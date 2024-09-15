<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function confirm(RegisterRequest $request)
    {
        $register = $request->only(['name', 'email', 'password']);
        return view('register', ['register' => $register]);
    }
}
