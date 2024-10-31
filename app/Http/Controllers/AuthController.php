<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show user login form
    public function showUserLoginForm()
    {
        return view('auth.userLogin');
    }

    // Handle user login
    public function userLogin(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Add security against session fixation
            
            return redirect()->intended()
                ->with('success', 'Successfully logged in!');
        }
        return back()
            ->withInput($request->only('email')) // Keep the email field filled
            ->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
    }

    // Show user registration form
    public function showUserRegistrationForm()
    {
        return view('auth.userRegistration');
    }

    // Handle user registration
    public function userRegister(Request $request)
    {
        // dd($request); 

        $request->validate([
            'first_name' => 'required|string|max:255|regex:/^[\p{L}]+(?: [\p{L}]+)?$/u',
            'last_name' => 'required|string|max:255|regex:/^[\p{L}]+$/u',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',     // At least one lowercase letter
                'regex:/[A-Z]/',     // At least one uppercase letter
                'regex:/[0-9]/',     // At least one digit
                'regex:/[@$!%*?&#]/', // At least one special character
                'confirmed', // This requires a password confirmation field (password_confirmation)
            ],
            'gender' => 'required|in:Male,Female,Other',
            'phone_num' => [
                'required',
                'regex:/^\+?[0-9]{7,15}$/', // Validates phone numbers with optional + and 7 to 15 digits
            ],
            'region' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'required|max:255',
            'barangay' => 'required|max:255',
            'detailed_address' => 'required|max:255',
        ]);
        
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone_num' => $request->phone_num,
            'password' => Hash::make($request->password),
            
        ]);
        
        $user->addresses()->create([
            'region' => $request->region,
            'province' => $request->province,
            'city' => $request->city,
            'barangay' => $request->barangay,
            'detailed_address' => $request->detailed_address,
        ]);

        //Auth::login($user);

        return redirect()->route('user.login');
    }

    // Show shop login form
    public function showShopLoginForm()
    {
        return view('auth.shopLogin');
    }

    // Handle shop login
    public function shopLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('shop')->attempt($credentials)) {
            return redirect()->route('index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Show shop registration form
    public function showShopRegistrationForm()
    {
        return view('auth.shopRegistration');
    }

    // Handle shop registration
    public function shopRegister(Request $request)
    {
        $request->validate([
            'shop_name' => 'required|string|max:255',
            'category' => 'required|array', // Accepts an array of category IDs
            'email' => 'required|email|unique:shops,email',
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

        $shop = Shop::create([
            'user_id' => Auth::id(),
            'shop_name' => $request->shop_name,
            'contact_number' => $request->phone_num,
            'email' => $request->email,
            'description' => $request->description ?? null,
        ]);

        // Attach categories
        $shop->categories()->attach($request->category); // Assuming 'category' is an array of IDs

        // Save address details
        $shop->addresses()->create([
            'shop_id' => $shop->id,
            'region' => $request->region,
            'province' => $request->province,
            'city' => $request->city,
            'barangay' => $request->barangay,
            'detailed_address' => $request->detailed_address,
        ]);

        $shop->user()->associate(Auth::user());

        $user = Auth::user();
        $user->is_service_provider = true;
        if ($user instanceof Model) {
            $user->save();
        }
        

        return redirect()->route('index');
    }

    public function userLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }

    // Handle shop logout
    public function shopLogout(Request $request)
    {
        Auth::guard('shop')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
    
}
