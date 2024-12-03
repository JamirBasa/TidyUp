<?php

namespace App\Http\Controllers;

use App\Models\OperatingHours;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Shop;
//use Illuminate\Auth\Events\Registered;
//use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
            'password' => 'required',
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
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->userRole()->create([
            'user_id' => $user->id,
            'role_id' => 1, // Ensure the role_id is valid
        ]);

        return redirect()->route('login');
    }






    // Show shop registration form
    public function showShopRegistrationForm()
    {
        return view('auth.shopRegistration');
    }

    // Handle shop registration



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
    //email verify

    /*
    public function verifyNotice(){
        return view('auth.verify-email');
    }
    public function verifyEmail(EmailVerificationRequest $request) {
        $request->fulfill();
     
        return redirect()->route('index');
    }
    public function verifyHandler(Request $request) {
        $request->user()->sendEmailVerificationNotification();
     
        return back()->with('message', 'Verification link sent!');
    }
    */

    // DAVE show forgot password form
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }
}
