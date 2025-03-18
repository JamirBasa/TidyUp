<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
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
        $shops = DB::table('shops')
            ->join('shop_account', 'shops.id', '=', 'shop_account.shop_id')
            ->join('users', 'shop_account.shop_owner_id', '=', 'users.id')
            ->where('shop_account.shop_owner_id', $userId)
            ->get();

        $shopBranches = $shopId ? DB::table('shop_branch')->where('shop_id', $shopId)->get() : collect();

        $shopPendingAppointments = DB::table('shop_appointments')
        ->join('appointments', 'shop_appointments.appointment_id', '=', 'appointments.id')
        ->join('users', 'appointments.user_id', '=', 'users.id')
        ->join('appointment_types', 'appointments.appointment_type_id', '=', 'appointment_types.id')
        ->join('shop_branch', 'appointments.branch_id', '=', 'shop_branch.id')
        ->join('branch_service_categories as bsc', 'appointments.service_id', '=', 'bsc.id')
        ->select('users.username as username', 'users.first_name as first_name', 'users.last_name as last_name', 'appointment_types.appointment_type', 'shop_branch.branch_name', 'appointments.appointment_date as date', 'appointments.appointment_time as time', 'appointments.status as status', 'appointments.id as appointment_id', 'bsc.service_name', 'bsc.cost', 'bsc.duration', 'appointments.note')
        ->where(['shop_appointments.shop_id' => $shopId, 'is_successful' => true, 'appointments.status' => 'pending'])
        ->orderBy('appointments.appointment_date')
        ->orderBy('appointments.appointment_time')
        ->limit(5)
        ->get();
        $shopAppointments = DB::table('shop_appointments')
            ->join('appointments', 'shop_appointments.appointment_id', '=', 'appointments.id')
            ->join('users', 'appointments.user_id', '=', 'users.id')
            ->join('appointment_types', 'appointments.appointment_type_id', '=', 'appointment_types.id')
            ->join('shop_branch', 'appointments.branch_id', '=', 'shop_branch.id')
            ->join('branch_service_categories as bsc', 'appointments.service_id', '=', 'bsc.id')
            ->select('users.username as username', 'users.first_name as first_name', 'users.last_name as last_name', 'appointment_types.appointment_type', 'shop_branch.branch_name', 'appointments.appointment_date as date', 'appointments.appointment_time as time', 'appointments.status as status', 'appointments.id as appointment_id', 'bsc.service_name', 'bsc.cost', 'bsc.duration', 'appointments.note')
            ->where(['shop_appointments.shop_id' => $shopId, 'is_successful' => true])
            ->orderBy('appointments.appointment_date')
            ->orderBy('appointments.appointment_time')
            ->limit(5)
            ->get();

        return view('shop.index', [
            'shops' => $shops,
            'user' => $user,
            'shopBranches' => $shopBranches,
            'userrole' => $userRole,
            'shopAppointments' => $shopAppointments,
            'shopPendingAppointments' => $shopPendingAppointments
        ]);
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

        $users = DB::table('users')
            ->join('user_role', 'users.id', '=', 'user_role.user_id')
            ->where('user_role.role_id', '!=', 1)
        ->get();
        $shopAppointments = DB::table('shop_appointments')
            ->join('appointments', 'shop_appointments.appointment_id', '=', 'appointments.id')
            ->join('users', 'appointments.user_id', '=', 'users.id')
            ->join('appointment_types', 'appointments.appointment_type_id', '=', 'appointment_types.id')
            ->join('shop_branch', 'appointments.branch_id', '=', 'shop_branch.id')
            ->join('branch_service_categories as bsc', 'appointments.service_id', '=', 'bsc.id')
            ->select('users.username as username', 'users.first_name as first_name', 'users.last_name as last_name', 'appointment_types.appointment_type', 'shop_branch.branch_name', 'appointments.appointment_date as date', 'appointments.appointment_time as time', 'appointments.status as status', 'appointments.id as appointment_id', 'bsc.service_name', 'bsc.cost', 'bsc.duration', 'appointments.note')
            ->where('shop_appointments.shop_id', $shopId)
            ->where('is_successful', true)
            ->where('appointments.status', '!=', 'pending')
            ->orderBy('appointments.status', 'asc')
            ->orderBy('appointments.appointment_date')
            ->orderBy('appointments.appointment_time')
            ->get();
        $shopPendingAppointments = DB::table('shop_appointments')
        ->join('appointments', 'shop_appointments.appointment_id', '=', 'appointments.id')
        ->join('users', 'appointments.user_id', '=', 'users.id')
        ->join('appointment_types', 'appointments.appointment_type_id', '=', 'appointment_types.id')
        ->join('shop_branch', 'appointments.branch_id', '=', 'shop_branch.id')
        ->join('branch_service_categories as bsc', 'appointments.service_id', '=', 'bsc.id')
        ->select('users.username as username', 'users.first_name as first_name', 'users.last_name as last_name', 'appointment_types.appointment_type', 'shop_branch.branch_name', 'appointments.appointment_date as date', 'appointments.appointment_time as time', 'appointments.status as status', 'appointments.id as appointment_id', 'bsc.service_name', 'bsc.cost', 'bsc.duration', 'appointments.note')
        ->where(['shop_appointments.shop_id' => $shopId, 'is_successful' => true, 'appointments.status' => 'pending'])
        ->orderBy('appointments.appointment_date')
            ->orderBy('appointments.appointment_time')
        ->get();
        return view('shop.appointment', ['shops' => $shops, 'user' => $user, 'shopBranches' => $shopBranches, 'userRole' => $userRole, 'shopAccount' => $shopAccount, 'shopOwner' => $shopOwner, 'shopAppointments' => $shopAppointments, 'shopPendingAppointments' => $shopPendingAppointments, 'users' => $users]);
    }

    public function approveAppointment(Request $request, $id)
{
    $validated = $request->validate([
        'status' => 'required|in:upcoming,declined,completed,cancelled,no-show,started',
    ]);

    $appointment = Appointments::find($id);
    $appointment->status = $validated['status'];
    $appointment->save();

    return redirect()->back();
}

}
