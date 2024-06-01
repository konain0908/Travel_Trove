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
                <h1 class="text-center ">offers List</h1>
                <a href="{{route('of')}}" class="btn btn-primary btn-sm mb-3 ">Add New</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>country</th>
                        <th>date</th>
                        <th>price</th>
                        <th>Image</th>
                       
                    </tr>
                    @foreach($so as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->coun_id}}</td>
                        <td>{{ $s->date }}</td>
                        <td>{{ $s->price }}</td>
                        <td> <img src="{{ asset('offerImage/' . $s->image) }}" alt="Image" width="100" height="100"></td>
                       
                    </tr>
                    @endforeach 
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
