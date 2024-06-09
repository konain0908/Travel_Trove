@extends('adminpages.layouts.app')  
  
  
 @section('destinations')

 <div class="pagetitle">
    <h1>Users</h1> 
   
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        @include('homepages._message')
        <div class="card">
          <div class="card-body">
            <div class="row">
            <div class="col-lg-6">
                <h5 class="card-title">Users List</h5>
            </div>
            <div class="col-lg-6" style="text-align: right">
                <a href="{{ route('adduser') }}" style="margin-top: 10px" class="btn btn-primary pull-right">Add</a>
            </div>
        </div>
            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Date</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($getRecord as $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->role_name }}</td>
                   
                    <td>{{ $value->created_at }}</td>
                   
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



  