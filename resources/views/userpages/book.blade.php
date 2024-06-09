@extends('adminpages.layouts.app')
@section('usercontent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Booking</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
   

    <div class="container">
        <h1 class="text-center mb-4">Create Booking</h1>
        @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
        <form action="{{ route('booking.store') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="offer_id" >OFFER</label>
                <select class="form-control" name="offer_id" id="offer_id" >
                    @foreach($offers as $offer)
                    
                        <option value="{{ $offer->id }}">{{ $offer->country }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="phoneno">PHONE NUMBER</label>
                <input type="text" class="form-control" name="phoneno" id="phoneno" >
                @error('phoneno')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
            </div>
            <div class="form-group">
                <label for="num_of_person">NUMBER OF PERSONS</label>
                <input type="number" class="form-control" name="num_of_person" id="num_of_person" >
                @error('num_of_person')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Create Booking</button>
        </form>
    </div>
</body>
</html>
@endsection
