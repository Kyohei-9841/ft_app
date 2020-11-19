<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{

    /**
     * トップ画面表示
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        \Log::debug('トップ');
        return view("top.view");
    }
}