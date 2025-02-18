<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show Login Form
    public function login()
    {
        return view('auth.login');
    }

    // Show Registration Form
    public function register()
    {
        return view('auth.register');
    }

    // Handle User Authentication
    public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // ✅ Redirect users based on their role
        if (Auth::user()->user_type === 'admin') {
            return redirect()->route('admin.dashboard')->with('success', 'Welcome to the Admin Dashboard!');
        } elseif (Auth::user()->user_type === 'user') {
            return redirect()->route('user.dashboard')->with('success', 'Welcome to the User Dashboard!');
        }

        // 🚨 If user_type is missing or invalid, log them out
        Auth::logout();
        return redirect('/login')->with('error', 'Invalid account type.');
    }

    return back()->withErrors([
        'email' => 'Your provided credentials do not match our records.',
    ])->onlyInput('email');
}



    // Handle Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login')->with('success', 'You have logged out successfully!');
    }


    // Handle User Registration
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        // Set user type
        $type = $request->usertype ?? 'user';

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $type,
            'password' => Hash::make($request->password)
        ]);

        // Auto-login user after registration
        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('user.dashboard')
            ->with('success', 'You have successfully registered & logged in!');
    }



}
