<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// バリデーション
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // public function showSignup()
    // {
    //     return view('login.signup');
    // }
    public function showLogin()
    {
        return view('login.login');
    }
    // signup
    public function create()
    {
        return view('login.signup');
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->first_name =$request->first_name;
        $user->last_name =$request->last_name;
        $user->first_name_kana =$request->first_name_kana;
        $user->last_name_kana =$request->last_name_kana;
        $user->postal_code =$request->postal_code;
        $user->address =$request->address;
        $user->telephone_number =$request->telephone_number;
        $user->gender =$request->gender;
        $user->email =$request->email;
        $user->password =$request->password;
        $user->save();
        //トップページに遷移する
        return redirect('top');
    }

    public function login(LoginFormRequest $request)
    {
        $credentials = $request->only('email', 'password');

        // ログイン確認
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // ホーム画面に遷移
            return redirect('home')->with('login_success', 'ログイン成功しました！');
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています.',
        ]);
    }
}
