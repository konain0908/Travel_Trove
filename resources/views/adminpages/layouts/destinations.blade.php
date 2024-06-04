@extends('adminpages.layouts.app')
@section('destinations')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Destination Form</div>
            <div class="card-body">
              <form action="{{ route('dest.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">destination Name</label>
                        <input type="text" class="form-control" id="name" name="destination_name" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


