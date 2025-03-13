<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegistrationForm()
    {
        return view('auth.register'); // Ensure 'auth.register' blade file exists
    }

    /**
     * Handle user registration.
     */
    public function register(Request $request)
    {
        // Validate the registration input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log in the user automatically
        Auth::login($user);

        // Redirect to a dashboard or home page
        return redirect()->intended('/dashboard')->with('success', 'Registration successful!');
    }

    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle user login.
     */
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Attempt authentication
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/notes/create')->with('success', 'Login successful!');
        }
    
        // If authentication fails, return with an error
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
    

    /**
     * Handle user logout.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
