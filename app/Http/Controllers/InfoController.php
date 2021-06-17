<?php

namespace App\Http\Controllers;

use App\Models\userInfo;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function registration(Request $request)
    {
        $userInfo = new userInfo();
        $form = $request->all();
        unset($form['_token_']);
        $userInfo->fill($form)->save();

        return view('thanks');
    }
}
