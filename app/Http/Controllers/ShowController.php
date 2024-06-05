<?php

namespace App\Http\Controllers;

use App\Models\offer;
use Illuminate\Http\Request;
use App\Models\popular_destination;

class ShowController extends Controller
{
    public function showdestinations(){
        $des=popular_destination::get();
        $offr=offer::get();
        return view('homepages.welcome', compact('des','offr')); // Pass the variable to the view
    }

}

