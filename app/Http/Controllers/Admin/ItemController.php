<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //商品一覧ページ
    public function index()
    {
        return view('admin.item.index');
    }

    //商品入力
    public function create()
    {
        return view('admin.item.create');
    }

    //商品追加  
    public function add()
    {
        //商品一覧にリダイレクト
        return redirect('/admin/item/');
    }
}
