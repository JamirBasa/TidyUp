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
        // $sidebarData = $this->getSidebarData($request->user());
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;        
        $shops = Shop::inRandomOrder()->limit(6)->get();
        $shopGallery = ShopGallery::all();
        $shopBranches = ShopBranch::all();
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();
        // dd($branchCategory);

        return view('index', [
            'user' => $user,
            'userRole' => $userRole,
            'shops' => $shops,
            'shopGallery' => $shopGallery,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory
        ]);
    }
    public function appointments(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }

        //appointment_type, shop_name, branch_detailed_address, total_price, appointment_date, appointment_time, status

        $appointments = DB::table('users as u')
            ->join('appointments as a', 'u.id', '=', 'a.user_id')
            ->join('appointment_types as at', 'a.appointment_type_id', '=', 'at.id')
            ->join('shop_branch as sb', 'a.branch_id', '=', 'sb.id')
            ->join('shop_gallery as sg', 'sb.id', '=', 'sg.branch_id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->where('u.id', $user->id)
            ->where('a.is_successful', true)
            ->get(['a.id', 'at.appointment_type as type', 's.shop_name', 'sb.branch_name', 'sb.detailed_address', 'a.total_price', 'a.appointment_date as date', 'a.appointment_time as time', 'a.status', 'sg.path'])
            ->toArray();
        $appointments = collect($appointments)->unique('id')->values();
        // dd($appointments);
        $userRole = $RoleId[0]->role_id;
        return view('appointments', [
            'user' => $user,
            'userRole' => $userRole,
            'appointments' => $appointments,
        ]);
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

        $shops = Shop::all();
        //Shop Name, Shop ID, Branch ID, Branch Address Of Main, Gallery of Main Branch, the Categories
        $featuredShops = DB::table('shops as s')
            ->join('shop_branch as sb', 's.id', '=', 'sb.shop_id')
            ->join('shop_gallery as sg', 'sb.id', '=', 'sg.branch_id')
            ->join('branch_branch_category as bbc', 'sb.id', '=', 'bbc.branch_id')
            ->join('branch_category as bc', 'bbc.branch_category_id', '=', 'bc.id')
            ->select('s.shop_name', 's.id as shop_id', 'sb.id as branch_id', 'sb.detailed_address', 'bc.name as category_name', 'sg.path')
            ->get()->toArray();
        $featuredShops = collect($featuredShops)->unique('shop_id')->shuffle()->take(6)->values();
        // dd($featuredShops);
        $shopGallery = ShopGallery::all();
        $shopBranches = ShopBranch::all();
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();


        return view('explore', [
            'user' => $user,
            'userRole' => $userRole,
            'shops' => $shops,
            'shopGallery' => $shopGallery,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory,
            'featuredShops' => $featuredShops
        ]);
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

        $shops = Shop::inRandomOrder()->limit(6)->get(['id', 'shop_name']);
        $shopGallery = ShopGallery::all();
        $shopBranches = ShopBranch::all();
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();

        return view('popular', [
            'user' => $user,
            'userRole' => $userRole,
            'shops' => $shops,
            'shopGallery' => $shopGallery,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory
        ]);
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

        // Get shops that have branches with the category 'Barbershop'
        $shops = Shop::whereHas('branches.branchCategories', function ($query) {
            $query->where('name', 'Barbershop');
        })->inRandomOrder()->limit(6)->get(['id', 'shop_name']);

        $shopGallery = ShopGallery::all();
        $shopBranches = ShopBranch::all();
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->whereIn('bc.name', ['Barbershop']) // Filter by category name 'Barbershop'
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();

        return view('barbershops', [
            'user' => $user,
            'userRole' => $userRole,
            'shops' => $shops,
            'shopGallery' => $shopGallery,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory
        ]);
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

        // Get shops that have branches with the category 'Beauty Salon'
        $shops = Shop::whereHas('branches.branchCategories', function ($query) {
            $query->where('name', 'Beauty Salon');
        })->inRandomOrder()->limit(6)->get(['id', 'shop_name']);

        $shopGallery = ShopGallery::all();
        $shopBranches = ShopBranch::all();
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->whereIn('bc.name', ['Beauty Salon']) // Filter by category name 'Beauty Salon'
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();

        return view('beauty-salons', [
            'user' => $user,
            'userRole' => $userRole,
            'shops' => $shops,
            'shopGallery' => $shopGallery,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory
        ]);
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

        // Get shops that have branches with the category 'Nail Salon'
        $shops = Shop::whereHas('branches.branchCategories', function ($query) {
            $query->where('name', 'Nail Salon');
        })->inRandomOrder()->limit(6)->get(['id', 'shop_name']);

        $shopGallery = ShopGallery::all();
        $shopBranches = ShopBranch::all();
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->whereIn('bc.name', ['Nail Salon']) // Filter by category name 'Nail Salon'
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();

        return view('nail-salons', [
            'user' => $user,
            'userRole' => $userRole,
            'shops' => $shops,
            'shopGallery' => $shopGallery,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory
        ]);
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

        // Get shops that have branches with the category 'Hair Salon'
        $shops = Shop::whereHas('branches.branchCategories', function ($query) {
            $query->where('name', 'Hair Salon');
        })->inRandomOrder()->limit(6)->get(['id', 'shop_name']);

        $shopGallery = ShopGallery::all();
        $shopBranches = ShopBranch::all();
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->whereIn('bc.name', ['Hair Salon']) // Filter by category name 'Hair Salon'
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();

        return view('hair-salons', [
            'user' => $user,
            'userRole' => $userRole,
            'shops' => $shops,
            'shopGallery' => $shopGallery,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory
        ]);
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
