<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\ShopBranch;
use App\Models\User;
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

        $shops = DB::table('shops as s')
            ->join('shop_account as sa', 's.id', '=', 'sa.shop_id')
            ->join('users as u', 'sa.shop_owner_id', '=', 'u.id')
            ->join('shop_branch as sb', 's.id', '=', 'sb.shop_id')
            ->select('s.id', 's.shop_name', 'u.username as shop_owner', 'sb.branch_name', 'sb.detailed_address', 'sb.created_at')
            ->distinct()
            ->get();
        $shops = collect($shops)->unique('shop_name')->values();
        $shopBranches = ShopBranch::all();
        $branchCategory = DB::table('branch_category as bc')
            ->join('branch_branch_category as bbc', 'bc.id', '=', 'bbc.branch_category_id')
            ->join('shop_branch as sb', 'bbc.branch_id', '=', 'sb.id')
            ->join('shops as s', 'sb.shop_id', '=', 's.id')
            ->select('bc.name as category_name', 'bbc.branch_id', 's.id as shop_id')
            ->get();

        return view('admin.shops', [
            'user' => $user,
            'userRole' => $userRole,
            'shops' => $shops,
            'shopBranches' => $shopBranches,
            'branchCategory' => $branchCategory
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

        $users = User::all();

        return view('admin.customers', [
            'users' => $users,
            'user' => $user,
            'userRole' => $userRole,
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
