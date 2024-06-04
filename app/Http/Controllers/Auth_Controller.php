<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\popular_destination;
use App\Models\offer;
use App\Models\User;


class Auth_Controller extends Controller
{
    public function showdestinations(){
        $des=popular_destination::all(); 
        return view('adminpages.layouts.showdestinations', compact('des')); // Pass the variable to the view
    }

    public function createUser()
    {
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password=  Hash::make('admin12');
        $user->role_id='1';
        $user->save();

        return 'User created successfully!';
    }

    public function login()
    {
        if(!empty(Auth::check())){

            return view('adminpages.layouts.admindashboard');
        }
        return view('homepages.login');
    }

    public function authLogin(Request $request)
    {
        // $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){

            return view('adminpages.layouts.admindashboard');
        }else{

            return redirect()->back()->with('error','Please enter correct credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}




