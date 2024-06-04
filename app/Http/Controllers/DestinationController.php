<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\popular_destination;
use Illuminate\Support\Facades\Storage;

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

        // Redirect  with success message
        return redirect()->route('sd')->with('success', 'Destination added successfully.');
    }

    public function deleteDestination($id)
    {
        // Destination model se record retrieve karen
        $des = popular_destination::find($id);
    
        // Agar destination exist karta hai
        if ($des) {
            // Image ka path generate karen
            $imagePath = 'destinationImage/' . $des->image;
    
            // Filesystem se image delete karen
            if (Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
    
            // Database se record delete karen
            $des->delete();
    
            return redirect()->back()->with('success', 'Destination deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Destination not found.');
        }
    }

    public function edit($id)
{
    // Find the destination by ID
    $des = popular_destination::findOrFail($id);

    // Pass the destination to the edit view
    return view('adminpages.layouts.edit', compact('des'));
    
}

public function update(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'destination_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
        // Add more validation rules as needed
    ]);

    // Find the destination by ID
    $des = popular_destination::findOrFail($id);

    // Update destination details
    $des->update($request->all());

    // Redirect back with success message
    return redirect()->route('sd')->with('success', 'Destination updated successfully.');

}

    
}