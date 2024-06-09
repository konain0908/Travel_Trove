@extends('adminpages.layouts.app')  
  
  
 @section('destinations')

 <div class="pagetitle">
    <h1>Roles</h1> 
   
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        @include('homepages._message')
        <div class="card">
          <div class="card-body">
            <div class="row">
            <div class="col-lg-6">
                <h5 class="card-title">Roles List</h5>
            </div>
            <div class="col-lg-6" style="text-align: right">
            @if (!empty($permissionAdd))
            <a href="{{route('add')}}" class="btn btn-primary">Add</a><br>
                @endif

              
            </div>
        </div>
            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  
                    
                 

                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  @if (!empty($permissionEdit || $permissionDelete))
                  <th scope="col">Action</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                @foreach ($getRecord as $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>
                      @if (!empty($permissionEdit))
                        <a href="{{route('edit',$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        @endif
                        @if (!empty($permissionDelete))
                        <a href="{{route('delete',$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        @endif

                     
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>


      </div>
    </div>
  </section>
@endsection



  