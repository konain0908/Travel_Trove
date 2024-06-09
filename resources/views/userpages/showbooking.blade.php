@extends('adminpages.layouts.app')

@section('usercontent')
    <div class="container">
        <h1>Your Booked Tickets</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Country(from offers)</th>
                    <th>Date</th>
                    <th>Phone Number</th>
                    <th>Number of Persons</th>
                   
                    
                  
                    <!-- Add more columns if needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->offer->country ?? 'N/A' }}</td>
                        <td>{{ $booking->offer->date?? 'N/A' }}</td>

                        <td>{{ $booking->phoneno }}</td>
                        <td>{{ $booking->num_of_person }}</td>

                      
                       
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection