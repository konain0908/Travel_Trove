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
                @if(Auth::user()->role_id == 1)  
                <a href="{{route('of')}}" class="btn btn-primary btn-sm mb-3 ">Add New</a>@endif
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>country</th>
                        <th>date</th>
                        <th>price</th>
                        <th>Image</th>
                        @if(Auth::user()->role_id == 1)  
                       <th colspan="2" class="text-center">Action</th>
                       @endif
                       
                    </tr>
                    @foreach($so as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->country}}</td>
                        <td>{{ $s->date }}</td>
                        <td><span>$</span>{{ $s->price }} </td>
                        <td> <img src="{{ asset('offerImage/' . $s->image) }}" alt="Image" width="100" height="100"></td>
                        <td>    @if(Auth::user()->role_id == 1)  
                                <a href="{{ route('off.edit', ['id' => $s->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                             @endif
                            </td>
                            <td>
                            @if(Auth::user()->role_id == 1)  
                                <form action="{{ route('off.delete', ['id' => $s->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                 
                                </form>
                                @endif
                            </td>
                       
                    </tr>
                    @endforeach 
                </table>
                <div class="mt-5">
                {{ $so->links('pagination::bootstrap-4') }}
            </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
