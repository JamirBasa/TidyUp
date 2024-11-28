<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;
use App\Models\ShopBranch;
use App\Models\ShopGallery;
use App\Models\OperationHours;


class AppointmentController extends Controller
{
    public function bookNow(Request $request, $id, $branchId)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
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
        $currentBranchAppointmentTypes = DB::table('branch_appointment_types as bat')
            ->join('appointment_types as at', 'bat.appointment_type_id', '=', 'at.id')
            ->join('shop_branch as sb', 'bat.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->select('at.id', 'at.appointment_type', 'bat.appointment_type_id', 'at.description', 'bat.branch_id', 's.id as shop_id')
            ->where('bat.branch_id', $branchId)
            ->get();
        // dd($currentBranchAppointmentTypes);
        return view('booking.book-appointment', [
            'user' => $user,
            'userRole' => $userRole,
            'viewShop' => $ShopId,
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
            'firstImage' => $firstImage,
            'currentBranchAppointmentTypes' => $currentBranchAppointmentTypes
        ]);
    }

    public function bookNow2(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('booking.book-appointment2', ['user' => $user, 'userRole' => $userRole]);
    }

    public function bookNow3(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('booking.book-appointment3', ['user' => $user, 'userRole' => $userRole]);
    }

    public function bookNow4(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('booking.book-appointment4', ['user' => $user, 'userRole' => $userRole]);
    }

    public function firstProcess(Request $request)
    {
        dd($request->all());
        $request->validate([
            'apointment_type' => 'required',
            'branchId' => 'required',
            'shopId' => 'required',
        ]);
    }
}
