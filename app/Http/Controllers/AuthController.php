<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
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
        // For Debugging
        // dd([
        //     'request_method' => $request->method(),
        //     'all_data' => $request->all(),
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'route_name' => $request->route()->getName()
        // ]);
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
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('index');
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:shops,email',
            'password' => [
                'required',
                'string',
                'min:8',           
                'regex:/[a-z]/',     
                'regex:/[A-Z]/',   
                'regex:/[0-9]/',    
                'regex:/[@$!%*?&#]/',
                'confirmed',
            ],
        ]);

        $shop = Shop::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('shop')->login($shop);

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
