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
}
