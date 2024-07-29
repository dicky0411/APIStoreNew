<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // If successful, flash a success message to the session
            $request->session()->flash('success', 'Login successful!');
            return redirect()->intended(route('home'));
        }

        // If unsuccessful, flash an error message to the session
        $request->session()->flash('error', 'These credentials do not match our records.');
        return redirect()->back()->withInput($request->only('email'));
    }

    // Add registration method if needed
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        Auth::login($user);

        // Flash a success message to the session
        $request->session()->flash('success', 'Registration successful!');
        return redirect()->route('home');
    }
    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Flash a success message to the session
        $request->session()->flash('success', 'Logged out successfully!');

        // Redirect to the home page
        return redirect()->route('home');
    }
}
