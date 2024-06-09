<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offer;
use App\Models\PermissionRole;
use Illuminate\Support\Facades\Auth;
use App\Models\popular_destination;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    public function offerstore(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric',
            'country' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'country.regex' => 'The country may only contain letters and spaces.',
        ]);
    
        // Process the validated data
        $offer = new Offer();
        $offer->country = $request->country;
        $offer->price = $request->price;
        $offer->date = $request->date;
        
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = public_path('offerImage/');
            $image->move($path, $filename);
            $offer->image = $filename;
        }
    
        $offer->save();
    
        // Redirect or return a response
        return redirect()->back()->with('success', 'Offer created successfully.');
    }

   
    public function showoffer(){

        $so=offer::paginate(2);
        return view('adminpages.layouts.showoffers', compact('so')); 
    }

    public function deleteOffer($id)
    {
       
        // offer model se record retrieve karen
        $off = Offer::find($id);
    
        // Agar destination exist karta hai
        if ($off) {
            // Image ka path generate karen
            $imagePath = 'offerImage/' . $off->image;
    
            // Filesystem se image delete karen
            if (Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
    
            // Database se record delete karen
            $off->delete();
    
            return redirect()->back()->with('success', 'offer deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'offer not found.');
        }
    }

    public function edit($id)
    {
       
        // Find the destination by ID
        $off = offer::findOrFail($id);
    
        // Pass the destination to the edit view
        return view('adminpages.layouts.editoffer', compact('off'));
        
    }
    
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
           'price' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Find the offer by ID
        $off = offer::findOrFail($id);
    
        // Update offer details
        $off->price = $request->input('price');
        $off->country = $request->input('country');
        $off->date = $request->input('date');
    
        // Handle file upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($off->image && file_exists(public_path('offerImage/' . $off->image))) {
                unlink(public_path('offerImage/' . $off->image));
            }
    
            // Store the new image
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('offerImage/');
            $image->move($path, $filename);
            $off->image = $filename;
        }
    
        // Save the updated destination details
        $off->save();
    
        // Redirect back with success message
        return redirect()->route('so')->with('success', 'offer updated successfully.');
    }

    
    


    }
