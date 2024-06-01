@extends('adminpages.layouts.app')
@section('destinations')

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Offers Form</div>
            <div class="card-body">
              <form action="{{ route('off.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name"> date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-control" name="country">
                    <option value="">Select</option>
                    @foreach ($des as $d)
                    <option value="{{ $d->id }}">{{ $d->country }}</option>
                    @endforeach
                  </select>
                    </div>
                    <div class="form-group">
                        <label for="country">Price</label>
                        <input type="text" class="form-control" id="price" name="price" required>
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


