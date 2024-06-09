<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offer;
use App\Models\Booking;

use App\Models\User;


class UserCon extends Controller
{
    public function showoffer(){
        $so=offer::paginate(2); 
        return view('userpages.showoffers', compact('so')); 
    }
    public function create()
    {
        // Retrieve user data
        $user = User::find(auth()->id()); // Assuming the user is authenticated

        // Retrieve all offers
        $offers = Offer::all();

        // Pass user data and offers to the view
        return view('userpages.book', ['user' => $user, 'offers' => $offers]);
    }

    public function bookstore(Request $request)
    {
       
        $request->validate([
            'offer_id' => 'required|exists:offers,id',
            'phoneno' => ['required', 'regex:/^(\+?\d{1,3}[-\s]?)?\(?\d{3}\)?[-\s]?\d{3}[-\s]?\d{4}$/'],
            'num_of_person' => 'required|numeric',
        ], [
            'phoneno.regex' => 'The phone may only contain numbers.',
        ]);

        // Create a new Booking instance
        $booking = new Booking();
        $booking->user_id = $request->user()->id;
        $booking->offer_id = $request->offer_id;
        $booking->phoneno = $request->phoneno;
        $booking->num_of_person = $request->num_of_person;
        
        // Save the booking
        $booking->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Booking created successfully!');
    }

    public function viewBookings()
    {
        // Retrieve bookings associated with the authenticated user
        $bookings = Booking::where('user_id', auth()->id())->get();

        // Pass the bookings data to the view
        return view('userpages.showbooking', compact('bookings'));
    }

   
}