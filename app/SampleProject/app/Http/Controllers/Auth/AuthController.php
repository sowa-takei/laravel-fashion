<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// バリデーション
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup()
    {
        return view('login.signup');
    }
    public function login(LoginFormRequest $request)
    {
        dd($request->all());
    }
}
