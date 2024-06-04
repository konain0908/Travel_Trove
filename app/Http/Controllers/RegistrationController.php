<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('homepages.register');
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role_id = '2';
    $user->save();

    // Optionally, you can automatically log in the user after registration
    Auth::login($user);

    // Redirect to home or dashboard
    return view('adminpages.layouts.admindashboard');
}

}