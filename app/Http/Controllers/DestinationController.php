<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\popular_destination;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

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
    ]);

    // Find the destination by ID
    $des = popular_destination::findOrFail($id);

    // Update destination details
    $des->dsestination_name = $request->input('destination_name');
    $des->country = $request->input('country');
    $des->city = $request->input('city');

    // Handle file upload
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($des->image && file_exists(public_path('destinationImage/' . $des->image))) {
            unlink(public_path('destinationImage/' . $des->image));
        }

        // Store the new image
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = public_path('destinationImage/');
        $image->move($path, $filename);
        $des->image = $filename;
    }

    // Save the updated destination details
    $des->save();

    // Redirect back with success message
    return redirect()->route('sd')->with('success', 'Destination updated successfully.');
}

<<<<<<< HEAD
=======
public function search(Request $request)
{
    $query = $request->input('query');

    // Retrieve all results matching the search query
    $results = popular_destination::where('city', 'LIKE', '%' . $query . '%')->get();

    // Paginate all results (if needed)
    $resultsPaginated = $results->paginate(10); // Adjust the pagination size as needed

    return view('adminpages.layouts.showdestinations', compact('resultsPaginated'));
}


>>>>>>> 0b2be589f5c198e098de10083560c12cf4b9f66f

    
}