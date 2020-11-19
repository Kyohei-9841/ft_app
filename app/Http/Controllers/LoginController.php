<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    /**
     * ログイン画面表示
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        \Log::debug('ログイン');
        return view("login.view");
    }

    public function login(Request $request)
    {
        \Log::debug('ログイン：登録');
        $password = $request->input('password');
        $email = $request->input('email');

        $match_user = User::where('email', $email)->where('password', $password)->get();

        if (count($match_user) == 0) {
            echo 'ユーザーデータが存在しません';
            return view("entry.view");
        } else if (count($match_user) > 1) {
            echo 'ユーザーデータが複数件取得されました';
            return view("entry.view");
        }

        return redirect()->route('home', ['id' => $match_user[0]->id]);
    }
}