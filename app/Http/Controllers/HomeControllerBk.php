<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{

    /**
     * アップロード画面表示
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request, $id)
    {
        \Log::debug('アップロード');

        $match_user = User::where('id', $id)->get();
        $user = $match_user[0];

        \Log::debug($user);

        return view("home.view")->with(compact('user'));
    }
}
