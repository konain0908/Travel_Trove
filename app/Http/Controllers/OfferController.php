<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offer;
use App\Models\popular_destination;

class OfferController extends Controller
{
    public function offerstore(Request $request)
    {
            $request->validate([
            'price' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Process the validated data
        // For example, store the offer in the database
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
        return redirect()->back();
    }

    // public function country()
    // { 
    //     $des = popular_destination::all(); // Retrieve all records
        
    //     return view('adminpages.layouts.offers', compact('des'));
    // }
    public function showoffer(){
        $so=offer::all(); 
        return view('adminpages.layouts.showoffers', compact('so')); 
    }
    


    }
