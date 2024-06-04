@extends('adminpages.layouts.app')

@section('destinations')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Edit Destination</div>
            <div class="card-body">
            <form action="{{ route('des.update', $des->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT') <!-- Use PUT method for update -->

                    <div class="form-group">
                        <label for="name">Destination Name</label>
                        <input type="text" class="form-control" id="name" name="destination_name" value="{{ $des->dsestination_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country" value="{{ $des->country }}" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ $des->city }}" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        @if ($des->image)
                            <img src="{{ asset('destinationImage/' . $des->image) }}" alt="Current Image" class="mt-2" style="max-width: 200px;">
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
