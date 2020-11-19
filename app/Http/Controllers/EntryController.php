<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EntryController extends Controller
{

    /**
     * エントリー画面表示
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        \Log::debug('エントリー');
        return view("entry.view");
    }

    public function store(Request $request)
    {
        \Log::debug('エントリー：登録');

        $name = $request->input('name');
        $email = $request->input('email');
        $adress = $request->input('adress');
        $password = $request->input('password');

        $match_user = User::where('email', $email)->get();

        if (count($match_user) > 0) {
            echo 'すでに登録済み';
            return view("entry.view");
        }

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->adress = $adress;
        $user->password = $password;
        \Log::debug($user);

        $user->save();

        return redirect()->route('home', ['id' => $user->id]);
    }
}
