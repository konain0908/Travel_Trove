<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\popular_destination;

class DestinationController extends Controller
{
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'destination_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create a new popular_destination instance
        $destination = new popular_destination;
        $destination->dsestination_name = $request->destination_name;
        $destination->country = $request->country;
        $destination->city = $request->city;

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = public_path('destinationImage/');
            $image->move($path, $filename);
            $destination->image = $filename;
        }

        // Save the destination
        $destination->save();

        // Redirect back with success message
        return redirect()->back();
    }

    
}