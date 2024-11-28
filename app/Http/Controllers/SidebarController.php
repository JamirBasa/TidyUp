<?php

namespace App\Http\Controllers;

use App\Models\BranchCategory;
use App\Models\OperationHours;
use App\Models\Shop;
use App\Models\ShopBranch;
use App\Models\ShopGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SidebarController extends Controller
{
    //NOT AJAX\
    private function getSidebarData($user = null)
    {
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;

        $shops = Shop::all();
        $shopGallery = ShopGallery::all();
        $shopBranches = ShopBranch::all();
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();

        return [
            'user' => $user,
            'userRole' => $userRole,
            'shops' => $shops,
            'shopGallery' => $shopGallery,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory
        ];
    }

    public function index(Request $request)
    {
        $sidebarData = $this->getSidebarData($request->user());
        return view('index', $sidebarData);
    }
    public function appointments(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('appointments', ['user' => $user, 'userRole' => $userRole]);
    }
    public function explore(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('explore', ['user' => $user, 'userRole' => $userRole]);
    }
    public function view(Request $request, $id, $branchId)
    {
        $sidebarData = $this->getSidebarData($request->user());
        $ShopId = $id;
        $shop = Shop::where('id', $ShopId)->first();
        $shopName = $shop->shop_name;
        $shopBranches = ShopBranch::where('shop_id', $ShopId)->get();
        $shopGallery = ShopGallery::all();
        // dd($shopGallery->toArray());
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();
        $operationHours = OperationHours::whereHas('branch', function ($query) use ($ShopId) {
            $query->where('shop_id', $ShopId);
        })->get();
        $branchServiceCategories = DB::table('branch_service_categories as bsc')
            ->join('service_categories as sc', 'bsc.service_category_id', '=', 'sc.id')
            ->join('shop_branch as sb', 'bsc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->select('sc.id', 'sc.category_name', 'bsc.service_name', 'bsc.duration', 'bsc.cost', 'bsc.branch_id',  's.id as shop_id')
            ->get();
        $currentBranch = $shopBranches->where('id', $branchId)->first();
        $shopBranchesCount = $shopBranches->count();
        $firstImage = $shopGallery->where('branch_id', $currentBranch->id)->first();
        // dd($branchServiceCategories->toArray());
        return view('view-service', [
            'viewShop' => $ShopId,
            'sidebarData' => $sidebarData,
            'shop' => $shop,
            'shopGallery' => $shopGallery,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory,
            'shopName' => $shopName,
            'operationHours' => $operationHours,
            'branchServiceCategories' => $branchServiceCategories,
            'currentBranch' => $currentBranch,
            'shopBranchesCount' => $shopBranchesCount,
            'branchId' => $branchId,
            'firstImage' => $firstImage
        ]);
    }
    public function popular(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('popular', ['user' => $user, 'userRole' => $userRole]);
    }
    public function barbershops(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('barbershops', ['user' => $user, 'userRole' => $userRole]);
    }
    public function beautySalons(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('beauty-salons', ['user' => $user, 'userRole' => $userRole]);
    }
    public function nailSalons(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('nail-salons', ['user' => $user, 'userRole' => $userRole]);
    }
    public function hairSalons(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('hair-salons', ['user' => $user, 'userRole' => $userRole]);
    }
    public function faqs(Request $request)
    {

        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('faqs', ['user' => $user, 'userRole' => $userRole]);
    }
    public function sendFeedback(Request $request)
    {

        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('send-feedback', ['user' => $user, 'userRole' => $userRole]);
    }
    public function reportIssue(Request $request)
    {

        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('report', ['user' => $user, 'userRole' => $userRole]);
    }
}
