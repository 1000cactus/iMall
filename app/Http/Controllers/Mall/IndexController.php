<?php

namespace App\Http\Controllers\Mall;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;

class IndexController extends Controller
{
    public function oauth(){
        session('wechat.oauth_user');
        return redirect()->to('mall');
    }

    public function index()
    {
        return view('mall.index');
    }
}
