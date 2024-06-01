<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\popular_destination;
use App\Models\offer;


class Auth_Controller extends Controller
{
    public function showdestinations(){
        $des=popular_destination::all(); 
        return view('adminpages.layouts.showdestinations', compact('des')); // Pass the variable to the view
    }
}


