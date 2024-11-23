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
    public function shopProfile(Request $request)
    {
        $user = $request->user();
        $userId = $user->id;
        $shops = DB::table('shops')->where('user_id', $userId)->get();
        $shopId = $shops[0]->id;
        $shopAddress = DB::table('addresses')->where('shop_id', $shopId)->select('detailed_address', 'barangay')->get();

        return view('shop.shop-profile', ['shops' => $shops, 'user' => $user, 'shopAddress' => $shopAddress]);
    }
    public function catalog(Request $request)
    {
        $user = $request->user();
        $userId = $user->id;
        $shops = DB::table('shops')->where('user_id', $userId)->get();
        $shopId = $shops[0]->id;
        $shopAddress = DB::table('addresses')->where('shop_id', $shopId)->select('detailed_address', 'barangay')->get();

        return view('shop.catalog', ['shops' => $shops, 'user' => $user, 'shopAddress' => $shopAddress]);
    }

    public function manageBranches(Request $request)
    {
        $user = $request->user();
        $userId = $user->id;
        $shops = DB::table('shops')->where('user_id', $userId)->get();
        $shopId = $shops[0]->id;
        $shopAddress = DB::table('addresses')->where('shop_id', $shopId)->select('detailed_address', 'barangay')->get();

        return view('shop.manage-branches', ['shops' => $shops, 'user' => $user, 'shopAddress' => $shopAddress]);
    }
}
