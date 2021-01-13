<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Practicecontroller extends controller
{
    public function store(Request $request)
    {
        $filename = $request->imgpath->getClientOriginalName();
        // dd($filename);
        $img = $request->imgpath->storeAs('',$filename,'public');

        //ユーザークラスのインスタンス化
        $user = new User();
        //imgpathカラムに画像パスを挿入
        $user->create(['imgpath'=> $img]);
        return view('practice');
    }
}
