<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishingResults;
use App\Models\User;

class UploadController extends Controller
{

    /**
     * アップロード画面表示
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request, $id)
    {
        \Log::debug('アップロード');
        \Log::debug($id);

        return view("upload.view")->with(compact('id'));
    }

    public function store(Request $request)
    {
        \Log::debug('アップロード：保存');

        $id = $request->input('id');
        $position = $request->input('position');
        $fish_species = $request->input('fish_species');
        $size = $request->input('size');

        $request->validate([
            'pic' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'position' => 'required|string|max:255',
            'fish_species' => 'required|string|max:255',
            'size' => 'required|string|max:255'
        ]);

        $now_date_ymd = date("Y_m_d");
        $now_date_his = date("H_i_s");
        $img_url = $request->pic->storeAs('public/upload/' . $id . $now_date_ymd, $id . '_' . $now_date_his . '.jpg');
        \Log::debug($img_url);

        $fishing_results = new FishingResults();
        $fishing_results->user_id = $id;
        $fishing_results->position = $position;
        $fishing_results->fish_species = $fish_species;
        $fishing_results->size = $size;
        $fishing_results->pic = $img_url;
        $fishing_results->save();

        return redirect()->route('home', ['id' => $id]);
    }
}
