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
        $userRole = DB::table('user_role')->where('user_id', $user->id)->first();
        $userId = $user->id;
        $shopAccount = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopId = $shopAccount->isNotEmpty() ? $shopAccount[0]->shop_id : null;
        $shops = $shopId ? DB::table('shops')->where('id', $shopId)->get() : collect();
        $shopBranches = $shopId ? DB::table('shop_branch')->where('shop_id', $shopId)->get() : collect();
        // dd($shopBranches);
        return view('shop.index', ['shops' => $shops, 'user' => $user, 'shopBranches' => $shopBranches, 'userrole' => $userRole]);
    }

    public function shopProfile(Request $request)
    {
        $user = $request->user();
        $userRole = DB::table('user_role')->where('user_id', $user->id)->first();
        $userId = $user->id;
        $shopAccount = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopId = $shopAccount->isNotEmpty() ? $shopAccount[0]->shop_id : null;
        $shops = $shopId ? DB::table('shops')->where('id', $shopId)->get() : collect();
        $shopBranches = $shopId ? DB::table('shop_branch')->where('shop_id', $shopId)->get() : collect();
        $shopAccountOwner = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopOwner = DB::table('users')->where('id', $shopAccountOwner[0]->shop_owner_id)->get();

        return view('shop.shop-profile', ['shops' => $shops, 'user' => $user, 'shopBranches' => $shopBranches, 'userRole' => $userRole, 'shopOwner' => $shopOwner]);
    }

    public function catalog(Request $request)
    {
        $user = $request->user();
        $userRole = DB::table('user_role')->where('user_id', $user->id)->first();
        $userId = $user->id;
        $shopAccount = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopId = $shopAccount->isNotEmpty() ? $shopAccount[0]->shop_id : null;
        $shops = $shopId ? DB::table('shops')->where('id', $shopId)->get() : collect();
        $shopBranches = $shopId ? DB::table('shop_branch')->where('shop_id', $shopId)->get() : collect();
        $shopAccountOwner = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopOwner = DB::table('users')->where('id', $shopAccountOwner[0]->shop_owner_id)->get();

        return view('shop.catalog', ['shops' => $shops, 'user' => $user, 'shopBranches' => $shopBranches, 'userRole' => $userRole, 'shopAccount' => $shopAccount, 'shopOwner' => $shopOwner]);
    }

    public function manageBranches(Request $request)
    {
        $user = $request->user();
        $userRole = DB::table('user_role')->where('user_id', $user->id)->first();
        $userId = $user->id;
        $shopAccount = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopId = $shopAccount->isNotEmpty() ? $shopAccount[0]->shop_id : null;
        $shops = $shopId ? DB::table('shops')->where('id', $shopId)->get() : collect();
        $shopBranches = $shopId ? DB::table('shop_branch')->where('shop_id', $shopId)->get() : collect();

        return view('shop.manage-branches', ['shops' => $shops, 'user' => $user, 'shopBranches' => $shopBranches, 'userRole' => $userRole]);
    }

    public function appointment(Request $request)
    {
        $user = $request->user();
        $userRole = DB::table('user_role')->where('user_id', $user->id)->first();
        $userId = $user->id;
        $shopAccount = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopId = $shopAccount->isNotEmpty() ? $shopAccount[0]->shop_id : null;
        $shops = $shopId ? DB::table('shops')->where('id', $shopId)->get() : collect();
        $shopBranches = $shopId ? DB::table('shop_branch')->where('shop_id', $shopId)->get() : collect();
        $shopAccountOwner = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopOwner = DB::table('users')->where('id', $shopAccountOwner[0]->shop_owner_id)->get();

        return view('shop.appointment', ['shops' => $shops, 'user' => $user, 'shopBranches' => $shopBranches, 'userRole' => $userRole, 'shopAccount' => $shopAccount, 'shopOwner' => $shopOwner]);
    }
}
