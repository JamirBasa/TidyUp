<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;
use App\Models\ShopBranch;
use App\Models\ShopGallery;
use App\Models\OperationHours;
use App\Models\UserAppointments;
use App\Models\ShopAppointments;

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
        if (!$user) {
            return redirect()->route('user.login');
        }
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

    public function bookNow2(Request $request, $id, $branchId)
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
        if (!$user) {
            return redirect()->route('user.login');
        }
        return view('booking.book-appointment2', [
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

    public function bookNow3(Request $request, $id, $branchId)
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
            ->select('sc.id', 'bsc.id as service_id', 'sc.category_name', 'bsc.service_name', 'bsc.duration', 'bsc.cost', 'bsc.branch_id',  's.id as shop_id')
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
        if (!$user) {
            return redirect()->route('user.login');
        }
        return view('booking.book-appointment3', [
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

    public function bookNow4(Request $request, $id, $branchId)
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
        $appointmentDetails = Appointments::where('user_id', $user->id)
            ->join('users as u', 'appointments.user_id', '=', 'u.id')
            ->join('branch_service_categories as bsc', 'appointments.service_id', '=', 'bsc.id')
            ->join('service_categories as sc', 'bsc.service_category_id', '=', 'sc.id')
            ->where('appointments.shop_id', $ShopId)
            ->where('appointments.branch_id', $branchId)
            ->first();
        // dd($appointmentDetails);
        if (!$user) {
            return redirect()->route('user.login');
        };
        return view('booking.book-appointment4', [
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
            'currentBranchAppointmentTypes' => $currentBranchAppointmentTypes,
            'appointmentDetails' => $appointmentDetails
        ]);
    }

    public function firstProcess(Request $request)
    {

        $request->validate([
            'appointment_type_id' => 'required',
            'branch_id' => 'required',
            'shop_id' => 'required',
        ]);

        $appointment = Appointments::create([
            'user_id' => $request->user()->id,
            'shop_id' => $request->shop_id,
            'branch_id' => $request->branch_id,
            'appointment_type_id' => $request->appointment_type_id,
        ]);

        UserAppointments::create([
            'user_id' => $request->user()->id,
            'appointment_id' => $appointment->id,
        ]);

        ShopAppointments::create([
            'shop_id' => $request->shop_id,
            'branch_id' => $request->branch_id,
            'appointment_id' => $appointment->id,
        ]);

        $id = $request->shop_id;
        $branchId = $request->branch_id;
        return redirect()->route('book-appointment2', ['id' => $id, 'branchId' => $branchId]);
    }

    public function secondProcess(Request $request, $id, $branchId)
    {
        // dd($request->all());
        $request->validate([
            'user_id' => 'required',
            'branch_id' => 'required',
            'shop_id' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
        ]);

        $record = Appointments::where('user_id', $request->user_id)
            ->where('shop_id', $id)
            ->where('branch_id', $branchId)
            ->first();
        $record->update([
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
        ]);

        $id = $request->shop_id;
        $branchId = $request->branch_id;

        return redirect()->route('book-appointment3', ['id' => $id, 'branchId' => $branchId]);
    }

    public function thirdProcess(Request $request, $id, $branchId)
    {
        // dd($request->all());
        $request->validate([
            'service_id' => 'required',
            'total_price' => 'required',
        ]);

        $record = Appointments::where('user_id', $request->user_id)
            ->where('shop_id', $request->shop_id)
            ->where('branch_id', $request->branch_id)
            ->first();

        $record->update([
            'service_id' => $request->service_id,
            'total_price' => $request->total_price,
        ]);

        $id = $request->shop_id;
        $branchId = $request->branch_id;

        return redirect()->route('book-appointment4', ['id' => $id, 'branchId' => $branchId]);
    }

    public function lastProcess(Request $request, $id, $branchId)
    {

        $request->validate([
            'note' => 'nullable|string|max:200',
            'is_successful' => 'required',
        ]);

        $record = Appointments::where('user_id', $request->user()->id)
            ->where('shop_id', $id)
            ->where('branch_id', $branchId)
            ->first();


        $record->update([
            'note' => $request->note,
            'is_successful' => $request->is_successful,
        ]);

        return redirect()->route('appointments');
    }
}
