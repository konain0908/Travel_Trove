@extends('adminpages.layouts.app')

@section('destinations')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Destinations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<!-- Display search form -->
<form id="searchForm">
    <input type="text" id="searchInput" placeholder="Search...">
    <button type="submit">Search</button>
</form>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="text-center mt-2">Destinations List</h1>
            <a href="{{ route('ds') }}" class="btn btn-primary btn-sm mb-3">Add New</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            <table class="table table-bordered table-striped" id="destinationTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Image</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($des as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->dsestination_name }}</td>
                            <td>{{ $d->country }}</td>
                            <td>{{ $d->city }}</td>
                            <td>
                                <img src="{{ asset('destinationImage/' . $d->image) }}" alt="Image" width="100" height="100">
                            </td>
                            <td>
                                <a href="{{ route('des.edit', ['id' => $d->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('destinations.delete', ['id' => $d->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-5">
                {{ $des->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#searchForm').on('submit', function(e){
            e.preventDefault();
            var query = $('#searchInput').val().toLowerCase().trim();
            $('#destinationTable tbody tr').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(query) > -1)
            });
        });
    });
</script>

</body>
</html>
@endsection