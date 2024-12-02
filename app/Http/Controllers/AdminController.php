<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.dashboard', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }

    public function shops(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.shops', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }

    public function customers(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.customers', [
            'userRole' => $userRole,
            'user' => $user,
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
        $userRole = $RoleId[0]->role_id;
        return view('admin.appointments', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }
    public function manageBranches(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.manage-branches', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }

    public function invoice(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.invoice', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }

    public function analytics(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.analytics', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }

    public function customerService(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.customer-service', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }

    public function userFeedback(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.user-feedback', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }

    public function restrictions(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.restrictions', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }
    public function platformStaff(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.platform-staff', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }

    public function manageAccounts(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $RoleId = DB::table('user_role')->where('user_id', $user->id)->get('role_id');
        } else {
            $RoleId = collect([(object) ['role_id' => null]]);
        }
        $userRole = $RoleId[0]->role_id;
        return view('admin.manage-acccount', [
            'userRole' => $userRole,
            'user' => $user,
        ]);
    }
}
