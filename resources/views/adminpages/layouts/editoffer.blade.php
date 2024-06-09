@extends('adminpages.layouts.app')

@section('destinations')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Edit offer</div>
            <div class="card-body">
            <form action="{{ route('off.update', $off->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT') <!-- Use PUT method for update -->

                    <div class="form-group">
                        <label for="name">Country</label>
                        <input type="text" class="form-control" id="country" name="country" value="{{ $off->country }}" required>
                    </div>
                    <div class="form-group">
                        <label for="country">price</label>
                        <input type="text" class="form-control" id="date" name="price" value="{{ $off->price }}" required>
                    </div>
                    <div class="form-group">
                        <label for="city">date</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ $off->date }}" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        @if ($off->image)
                            <img src="{{ asset('offerImage/' . $off->image) }}" alt="Current Image" class="mt-2" style="max-width: 200px;">
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
