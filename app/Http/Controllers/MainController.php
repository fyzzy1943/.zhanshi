<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return redirect('/home');
    }

    public function home()
    {
        return view('home_1', [
            'title' => '公司总览'
        ]);
    }

    public function products()
    {
        return view('products_2', [
            'title' => '产品总览'
        ]);
    }

    public function vision()
    {
        return view('vision', [
            'title' => '服务愿景'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => '关于我们'
        ]);
    }

    public function product($code)
    {
        $links = [
            'dp' => ['p1', '国土大屏'],
            'yz' => ['p2', '移动一张图'],
            'zx' => ['p3', '国土在线'],
            'kyw' => ['p4', '<a href="http://ko1w.com/" target="_blank">矿易网</a>'],
            'dyw' => ['p5', '<a href="http://di1w.com/" target="_blank">地易网</a>'],
        ];

        return view("product.{$links[$code][0]}", [
            'title' => $links[$code][1]
        ]);
    }
}
