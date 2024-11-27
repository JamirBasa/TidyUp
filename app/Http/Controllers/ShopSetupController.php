<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ShopSetupController extends Controller
{
    //
    public function shopRegister(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        // dd($request);
        $request->validate([
            'shop_name' => 'required|string|max:255',
            'branch_name' => 'required|string|max:11',
            'category' => 'required|array',
            'email' => 'required|email|unique:shop_branch,email',
            'contact_number' => [
                'required',
                'regex:/^\+?[0-9]{7,15}$/',
            ],
            'region' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'required|max:255',
            'barangay' => 'required|max:255',
            'detailed_address' => 'required|max:255',
        ]);
        // dd($request->category);
        $shop = Shop::create([
            'shop_name' => $request->shop_name,
        ]);
        $user_id = Auth::id();
        $shop->shopAccount()->create([
            'shop_owner_id' => $user_id,
            'shop_id' => $shop->id,
        ]);
        $branch = $shop->branches()->create([
            'shop_id' => $shop->id,
            'branch_name' => $request->branch_name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'region' => $request->region,
            'province' => $request->province,
            'city' => $request->city,
            'barangay' => $request->barangay,
            'detailed_address' => $request->detailed_address,
        ]);
        // Attach categories
        $branch->branchCategories()->attach($request->category, [
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // Update user to service provider
        $authenticatedUser = User::find(Auth::id());
        $authenticatedUser->userRole()->update([
            'role_id' => 3
        ]);
        return redirect()->route('shop.index');
    }
}
