<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|string',
        ], [
            'email.exists' => 'The provided credentials do not match our records.',
        ]);
        
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return 'Your password is incorrect';
        }
        
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
