@extends('adminpages.layouts.app')

@section('destinations')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="text-center ">Destinations List</h1>
                <a href="{{route('ds')}}" class="btn btn-primary btn-sm mb-3 ">Add New</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Image</th>
                       
                    </tr>
                    @foreach($des as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->dsestination_name }}</td>
                        <td>{{ $d->country }}</td>
                        <td>{{ $d->city }}</td>
                        <td> <img src="{{ asset('destinationImage/' . $d->image) }}" alt="Image" width="100" height="100"></td>
                       
                    </tr>
                    @endforeach 
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
