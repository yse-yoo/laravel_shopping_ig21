<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function list(Request $request)
    {
        $items = Item::all();
        $data = ['items' => $items];
        return response()->json($data);
    }

    public function add(Request $request)
    {
        $posts = $request->all();
        $item = Item::create($posts);
        $data = ['item' => $item];
        return response()->json($data);
    }
}
