<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShopController extends Controller
{
    //
    public function index(Request $request)
    {

        $user = $request->user();
        $userId = $user->id;
        $shops = DB::table('shops')->where('user_id', $userId)->get();
        return view('shop.index', ['shops' => $shops, 'user' => $user]);
    }
}
